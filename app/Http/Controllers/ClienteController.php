<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Endereco;
use App\Models\Logradouro;
use App\Models\Estado;
use App\Models\Cidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
   

    public function index()
    {
        //$clientes = Cliente::all();

       $clientes = DB::select('SELECT clientes.*, logradouros.log_cep, logradouros.log_nome, enderecos.end_complemento, logradouros.log_tipo, enderecos.end_numero, logradouros.log_bairro FROM enderecos LEFT JOIN clientes ON enderecos.cli_id = clientes.cli_id INNER JOIN logradouros ON enderecos.log_id = logradouros.log_id;');

        return view('list', [
            'clientes' => $clientes,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client-register' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'cli_fantasia', 
            'cli_responsavel', 
            'cli_doctipo',
            'cli_docnumero',
            'end_complemento',
            'end_numero',
            'log_cep',
            'log_nome',
            'log_tipo',
            'log_bairro',
            'cid_nome',
            'est_nome'
        ]);

        
        if ($data['log_nome'] == null) {
            $request->session()->flash('error', 'CEP não localizado, cadastre seu endereço!');
            return redirect('logradouro/cadastro'); 
        }

       if($data){

            $novoCliente = new Cliente();
            $novoLogradouro = new Logradouro();
            $novaCidade = new Cidade();
            $novoEndereco = new Endereco();

            $novoCliente->cli_fantasia =  $data['cli_fantasia'];
            $novoCliente->cli_responsavel = $data['cli_responsavel'];
            $novoCliente->cli_doctipo = $data['cli_doctipo'];
            $novoCliente->cli_docnumero = $data['cli_docnumero'];
            $novoCliente->save();

            $clienteId = Cliente::all()->last();    

            $estadoId = Estado::find($data['est_nome']);              
            
            //$total = $novaCidade->where('cid_nome' , $data['cid_nome'])->count();          


            $novaCidade->cid_nome = $data['cid_nome'];
            $novaCidade->est_id = $estadoId->est_id;
            $novaCidade->save();

            $cidadeId = $novaCidade::all()->last();
              
           


            $novoLogradouro->log_cep = $data['log_cep'];
            $novoLogradouro->log_nome = $data['log_nome'];
            $novoLogradouro->log_tipo = $data['log_tipo'];
            $novoLogradouro->log_bairro = $data['log_bairro'];
            $novoLogradouro->cid_id = $cidadeId->cid_id;

            $novoLogradouro->save();

            $logId = Logradouro::all()->last();    

            $novoEndereco->end_complemento = $data['end_complemento'];
            $novoEndereco->end_numero = $data['end_numero'];
            $novoEndereco->cli_id = $clienteId->cli_id;
            $novoEndereco->log_id = $logId->log_id;
            
            $novoEndereco->save();


            $request->session()->flash('success', 'Usuário cadastrado com sucesso!');
            return redirect('/listar');   

       }else{
            $request->session()->flash('error', 'Usuário não foi cadastrado...');
            return redirect('/cadastro'); 
       }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Cliente::find($id)->delete();
        $request->session()->flash('success', 'Usuário deletado com sucesso!');
        return redirect('/listar');   
    }
}

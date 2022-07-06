<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
   

    public function index()
    {
        $clientes = Cliente::all();

        return view('list', [
            'clientes' => $clientes
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
        $cliente = $request->only([
            'cli_fantasia', 
            'cli_responsavel', 
            'cli_doctipo',
            'cli_docnumero'
        ]);

        //Falta uma validação para direcionar para cadastrar logradouro
        // if (!!$request->filled('log_nome')) {
        //     $request->session()->flash('error', 'CEP não localizado, cadastre seu endereço!');
        //     return redirect('logradouro/cadastro'); 
        // }

       if($cliente){

            $novoCliente = new Cliente();
                            
            $novoCliente->cli_fantasia =  $cliente['cli_fantasia'];
            $novoCliente->cli_responsavel = $cliente['cli_responsavel'];
            $novoCliente->cli_doctipo = $cliente['cli_doctipo'];
            $novoCliente->cli_docnumero = $cliente['cli_docnumero'];

            $novoCliente->save();

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
        $c = new Cliente;
        $c->show($cliente);
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

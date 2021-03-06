@extends('layouts.index')

@include('layouts.nav')

@section('content')    
<main class="register">
    <div class="card-panel-new ">
        <form action="{{ route('salvar_cliente')}}" method="post">
            @csrf
            <div class="col s6 form-name">                
               <p style="font-size: 20px">Cadastro de cliente</p>
            </div>
            <div class="row">                
                <div class="col s6">
                    <label>Nome Fantasia</label>
                    <input type="text" name="cli_fantasia" value="">
                </div>
                <div  class="col s6">
                    <label>Cliente responsável</label>
                    <input type="text" name="cli_responsavel" value="">
                </div>
            </div>
            
            <div class="row">
                <div class="col s6">
                    <label>Tipo de documento</label>
                <input type="text" name="cli_doctipo" value="">
                </div>
                <div class="col s6">
                    <label>Nº do documento</label>
                    <input type="text" name="cli_docnumero" value="">
                </div>                
            </div>            
            <div class="row">
                <div  class="col s6">
                    <label>CEP</label>
                    <input pattern="\d{5}-?\d{3}" id="cep" type="text" name="log_cep" value="">
                </div>
                <div class="col s6">
                    <label>Endereço</label>
                <input readonly="readonly"  id="logradouro" type="text" name="log_nome" value="">
                </div>
                <div class="col s6">
                    <label>Complemento</label>
                <input  id="complemento" type="text" name="end_complemento" value="" required>
                </div>
                <div class="col s6">
                    <label>Tipo</label>
                <input id="complemento" type="text" name="log_tipo" value="" required>
                </div>
                <div class="col s6">
                    <label>Nº do endereço</label>
                    <input id="numero" type="text" name="end_numero" value="">
                </div> 
                <div class="col s6">
                    <label >Bairro</label>
                    <input readonly="readonly" id="bairro" type="text" name="log_bairro" value="">
                </div> 
                <div class="col s6">
                    <label>Cidade</label>
                    <input readonly="readonly" id="cidade" type="text" name="cid_nome" value="">
                </div>
                <x-forms.select />
            </div>
            
            <div class="col s6 center-align">
                <button class="btn-large" type="submit" >Cadastrar cliente</button>
            </div>
            
        </form>
    </div>
</main>
@endsection

@include('layouts.footer')
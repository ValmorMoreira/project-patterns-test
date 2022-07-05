@extends('layouts.index')

@include('layouts.nav')

@section('content')    
<main class="register">
    <div class="card-panel-new ">
        <form action="" method="post">
            <div class="col s6 form-name">                
               <p style="font-size: 20px">Cadastro de cliente</p>
            </div>
            <div class="col s6">                
                <label>Nome Fantasia</label>
                <input type="text" name="cli_fantasia" value="">
            </div>
            <div  class="col s6">
                <label>Cliente responsável</label>
                <input type="text" name="cli_responsavel" value="">
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
            
            <div class="row col s6">
                <div  class="col s6">
                    <label>CEP</label>
                    <input type="text" name="log_cep" value="">
                </div>
                <div class="col s6">
                    <label>Endereço</label>
                <input type="text" name="cli_doctipo" value="">
                </div>
                <div class="col s6">
                    <label>Nº do endereço</label>
                    <input type="text" name="cli_docnumero" value="">
                </div> 
                <div class="col s6">
                    <label>Bairro</label>
                    <input type="text" name="cli_docnumero" value="">
                </div> 
                <div class="col s6">
                    <label>Cidade</label>
                    <input type="text" name="cli_docnumero" value="">
                </div>  
                <div class="col s6">
                    <label>Estado</label>
                    <input type="text" name="cli_docnumero" value="">
                </div>                  
            </div>
                
            
            <div class="col s6 center-align">
                <button class="btn-large" type="submit" >Cadastrar cliente</button>
            </div>
            
        </form>
    </div>
</main>
@endsection

@include('layouts.footer')
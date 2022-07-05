@extends('layouts.index')

@include('layouts.nav')

@section('content')    
<main class="register">
    <div class="card-panel-new ">
        <form action="" method="post">
            <h3>Cadastro de Clientes</h3>
            <div class="col s6">                
                <label>Nome</label>
                <input type="text" name="name" value="">
            </div>
            <div  class="col s6">
                <label>E-mail</label>
                <input type="email" name="email" value="">
            </div>
            <div class="col s6">
                <label>Senha</label>
                <input type="password" name="password" value="">
            </div>

            <button class="btn large" type="submit" >Cadastrar</button>
        </form>
    </div>
</main>
@endsection

@include('layouts.footer')
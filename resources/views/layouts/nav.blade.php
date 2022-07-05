@section('nav')
<div class="navbar-fixed">
    <nav class="nav-wrapper green darken-3"> 
        <div class="container">
          <a class="brand-logo" href="{{'Cadastro-de-cliente'}}">
            <img class="nav-logo" style="vertical-align:top;" class="circle my-logo" src={{asset('assets/img/recipe-icon.png')}} >
            Brasil API
          </a>
          <ul class="right hide-on-med-and-down">
            <li><a href="{{'Cadastro-de-cliente'}}">Cadastrar cliente</a></li>
            <li><a href="{{'Cadastro-de-logradouro'}}">Cadastrar logradouro</a></li>
            <li><a href="{{'Listar'}}">Listar clientes</a></li>
          </ul>
        </div>
    </nav>
</div>
@endsection
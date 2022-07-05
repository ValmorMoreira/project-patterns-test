@section('nav')
<div class="navbar-fixed">
    <nav class="nav-wrapper green"> 
        <div class="container">
          <a class="brand-logo" href="#">
            <img class="nav-logo" style="vertical-align:top;" class="circle my-logo" src={{asset('assets/img/recipe-icon.png')}} >
            Exame PP
          </a>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#>">Cadastrar cliente</a></li>
            <li><a href="#>">Cadastrar logradouro</a></li>
            <li><a href="#>">Listar clientes</a></li>
          </ul>
        </div>
    </nav>
</div>
@endsection
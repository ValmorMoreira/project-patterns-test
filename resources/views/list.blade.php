@extends('layouts.index')

@include('layouts.nav')

@section('content')    
<main class="container">

  @include('layouts.flash-message')

  @if(count($clientes) > 0)
  <div class="list">
    <ul class="collection">    
      @foreach ($clientes as $cliente)
        <li class="collection-item avatar">
          <img src={{asset('assets/img/recipe-icon.png')}} alt="" class="circle">
          <span class="title">Nome fantasia: {{$cliente->cli_fantasia}}</span>
          <p> Responsável: {{$cliente->cli_responsavel}}<br>
            Tipo do documento: {{$cliente->cli_doctipo}}<br>
            Nº do documento: {{$cliente->cli_docnumero}}<br>
          </p>
        <a style="color: red" onclick="return confirm('Tem certeza que deseja excluir?')" href="{{route('deletar_cliente', ['cli_id' => $cliente->cli_id])}}" class="secondary-content"><i class="material-icons garbage-icon">delete</i><br>Deletar</a>
        Cadastrado em : {{date('m/d/Y', strtotime($cliente->created_at))}}
      </li>
      @endforeach        
      </ul>
      @else 
      <div class="home-text">
        <h4>Não existem clientes cadastrados</h4>
    </div>
  </div>
      @endif
</main>
@endsection

@include('layouts.footer')
@extends('layouts.index')

@include('layouts.nav')

@section('content')    
<main class="container">

  @include('layouts.flash-message')

  @if(count($clientes) > 0)
  <div class="list">
    <ul class="collection">    
      @foreach ($clientes as $cliente)
        @foreach ($enderecos as $endereco)
        <li class="collection-item avatar">
          <img src={{asset('assets/img/recipe-icon.png')}} alt="" class="circle">
          <span class="title">Nome fantasia: {{$cliente->cli_fantasia}}</span>
          <p> Responsável: {{$cliente->cli_responsavel}}<br>
            Tipo do documento: {{$cliente->cli_doctipo}}<br>
            Nº do documento: {{$cliente->cli_docnumero}}<br>
            Rua: {{$endereco->log_nome}}<br>
            Bairro: {{$endereco->log_bairro}}<br>
            Tipo: {{$endereco->log_tipo}}<br>
            CEP: {{$endereco->log_cep}}<br>
            Complemento: {{$endereco->end_complemento}}<br>
            Número: {{$endereco->end_numero}}<br>
           

          </p> 
        Cadastrado em : {{date('m/d/Y', strtotime($cliente->created_at))}} 
      <form action="{{route('deletar_cliente', ['cli_id' => $cliente->cli_id])}}" method="POST">
        @csrf
        <button onclick="return confirm('Tem certeza que deseja excluir?')" class="btn red waves-effect waves-light secondary-content" type="submit" name="action">Excluir
          <i class="material-icons left">delete</i>
      </button>
      </form>

      </li>
      @endforeach   
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
@extends('layouts.index')

@include('layouts.nav')

@section('content')    
<main class="container">

  @include('layouts.flash-message')

  @if(count($clientes) > 0 )
  <div class="list">   
    <ul class="collection">    
      @foreach ($clientes as $cliente)
        @if($cliente->cli_id != null)
        <li class="collection-item avatar">
          <img src={{asset('assets/img/recipe-icon.png')}} alt="" class="circle">
          <span class="title">Nome fantasia: {{$cliente->cli_fantasia}}</span>
          <p> Responsável: {{$cliente->cli_responsavel}}<br>
            Tipo do documento: {{$cliente->cli_doctipo}}<br>
            Nº do documento: {{$cliente->cli_docnumero}}<br><br>
            Rua: {{$cliente->log_nome}}<br>
            Bairro: {{$cliente->log_bairro}}<br>
            Tipo: {{$cliente->log_tipo}}<br>
            CEP: {{$cliente->log_cep}}<br>
            Complemento: {{$cliente->end_complemento}}<br>
            Número: {{$cliente->end_numero}}<br><br>
            Cidade: {{$cliente->cid_nome}} <br>
            Estado: {{$cliente->est_nome}} 
          </p> 
        Cadastrado em : {{date('m/d/Y', strtotime($cliente->created_at))}} 
      <form action="{{route('deletar_cliente', ['cli_id' => $cliente->cli_id])}}" method="POST">
        @csrf
        <button onclick="return confirm('Tem certeza que deseja excluir?')" class="btn red waves-effect waves-light secondary-content" type="submit" name="action">Excluir
          <i class="material-icons left">delete</i>
      </button>
      </form>
      @endif
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
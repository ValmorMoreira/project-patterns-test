@extends('layouts.index')

@include('layouts.nav')

@section('content')    
<main class="container">
    
    <ul class="collection">
        <li class="collection-item avatar">
          <img src={{asset('assets/img/recipe-icon.png')}} alt="" class="circle">
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle">folder</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle green">insert_chart</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle red">play_arrow</i>
          <span class="title">Title</span>
          <p>First Line <br>
             Second Line
          </p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
      </ul>
</main>
@endsection

@include('layouts.footer')
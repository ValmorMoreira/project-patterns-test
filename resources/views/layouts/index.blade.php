<!DOCTYPE html>
<html>
<head>
  <title>Exame Padrões de Projeto</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <!-- Custom CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/css/personalStyle.css') }}">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">   
</head>

<body>

<header> 
     @yield('nav')
</header>

@yield('content')

<footer class="page-footer green">
    @yield('footer')
</footer>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
</body>

</html>
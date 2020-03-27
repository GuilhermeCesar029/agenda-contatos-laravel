<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-dark bg-primary" >
      <a class="navbar-brand" href="#">Agenda</a>
      @if(Auth::guest())
        <form class="form-inline my-2 my-lg-0">
          <a class="navbar-brand" href="{{route('site.login')}}">Fazer Login</a>
        </form>
      @else
        <a href="">Deu certo</a>  
      @endif
    </nav>

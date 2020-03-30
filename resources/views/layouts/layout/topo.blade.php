<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <nav>
    <div class="nav-wrapper cyan ">
      <a href="{{route('site.home')}}" class="brand-logo"> &ensp; Agenda de Contatos</a>
      <ul class="right hide-on-med-and-down">
          @if(Auth::guest())
            <li>
              <a class="waves-effect waves-light btn" href="{{route('site.login')}}">Fazer Login</a>
            </li>
            <li>
              <a class="waves-effect waves-light btn" href="{{route('site.cadastro')}}">Cadastre-se</a>
            </li>
          @else 
            <li>
              <a href="{{route('admin.contatos.index')}}"><h5>{{Auth::user()->nome}}</h5></a>
            </li>
            <li>
              <a class="waves-effect waves-light btn" href="{{route('site.login.sair')}}">Sair</a>
            </li>
          @endif
      </ul>
    </div>
  </nav>

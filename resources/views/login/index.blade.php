@extends('layouts.principal')

@section('titulo', 'Faça seu Login')

@section('conteudo')
    <div class="container">
        <h3 class="center">Login</h3>
        <div class="row">
            <form class="col s12" action="{{route('site.login.entrar')}}" method="POST">
                {{csrf_field()}}

                        Email<input type="text" name="email" required>                    
                        Senha<input type="password" name="password" required>
                    <button class="btn deep-orange">
                        <i class="material-icons right">send</i>
                        Entrar
                    </button>
                
            </form>
        </div>
    </div>
@endsection
@extends('layouts.principal')

@section('titulo', 'Faça seu Login')

@section('conteudo')
    <form action="{{route('site.login.entrar')}}" method="POST">
        {{csrf_field()}}
        
    </form>
    
@endsection
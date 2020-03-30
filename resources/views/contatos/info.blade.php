@extends('layouts.principal')

@section('titulo', 'visualizar contato')
    
@section('conteudo')
    <div class="center">
        <h2>Visualizar contato</h2>
    </div>
    <div class="row">
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-content">          
                        <h4>{{$info['nome']}} {{$info['sobrenome']}}</h4>
                        <p>{{$info['email']}}</p>
                        <p>{{$info['telefone']}}</p>
                        <p>{{$info['data_nascimento']}}</p>
                        <p>{{$info['descricao']}}</p>              
                    </div>
                </div>
            </div> 
    </div>
@endsection
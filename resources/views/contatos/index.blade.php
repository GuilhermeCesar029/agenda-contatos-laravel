@extends('layouts.principal')

@section('titulo', 'Contatos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de contatos</h3>
    </div>
    <div>
        <a class="btn  blue darken-4" href="{{route('admin.contatos.adicionar')}}">
                <i class="material-icons">add</i>
            Adicionar contato
        </a>
        <table class="centered striped highlight">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Numero</th>
                    <th>Email</th>
                    <th>Açao</th>
                </tr>
                <tbody>
                    @foreach ($registros as $registro)
                        <tr>
                            <td>
                                {{$registro['nome']}}                             
                            </td>
                            <td>{{$registro['telefone']}}</td>
                            <td>{{$registro['email']}}</td>
                            <td>
                                &emsp;<a href="{{route('admin.contatos.editar', $registro->id)}}">
                                        <i class="material-icons">mode_edit</i>
                                      </a>
                                &emsp;<a href="{{route('admin.contatos.info', $registro->id)}}">
                                        <i class="material-icons">visibility</i>
                                      </a>
                                      
                            </td>                            
                        </tr>                            
                    @endforeach
                </tbody>
            </thead>
        </table>
    </div>
    
@endsection
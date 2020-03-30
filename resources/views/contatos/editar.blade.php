@extends('layouts.principal')

@section('titulo', 'editar Contato')

@section('conteudo')
<div class="container">
        <h3 class="center">Editar Contato</h3>
        <div class="row">
            <form class="col s12" action="{{route('admin.contatos.atualizar', $registros->id)}}" method="POST">
                {{csrf_field()}}
                    <input type="hidden" name="_method" value="put">
                    Nome <input type="text" name="nome" value="{{$registros['nome']}}" required >
                    Sobrenome<input type="text" name="sobrenome" value="{{$registros['sobrenome']}}" required>
                    Data de Nascimento<input type="date" name="data_nascimento" value="{{$registros['data_nascimento']}}" required>
                    Telefone<input type="number" name="telefone" value="{{$registros['telefone']}}" required>
                    email<input type="email" name="email" value="{{$registros['email']}}" required>                    
                    descrição<input type="text" name="descricao" value="{{$registros['descricao']}}" required>
                    <button class="btn deep-green">
                        <i class="material-icons right"></i>
                        Atualizar
                    </button>
                
            </form>
        </div>
    </div>
@endsection
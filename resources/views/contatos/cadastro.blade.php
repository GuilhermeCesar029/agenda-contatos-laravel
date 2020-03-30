@extends('layouts.principal')

@section('titulo', 'Cadastre-se')

@section('conteudo')
    <div class="container">
        <h3 class="center">Cadastre-se</h3>
        <div class="row">
            <form class="col s12" action="{{route('admin.contatos.salvar')}}" method="POST">
                {{csrf_field()}}

                        Nome<input type="text" name="nome" required>
                        Sobrenome<input type="text" name="sobrenome" required>
                        Data de Nascimento<input type="date" name="data_nascimento" required>
                        Telefone<input type="number" name="telefone" required>
                        email<input type="email" name="email" required>                    
                        descrição<input type="text" name="descricao" required>
                    <button class="btn deep-green">
                        <i class="material-icons right"></i>
                        Cadastre-se
                    </button>
                
            </form>
        </div>
    </div>
@endsection
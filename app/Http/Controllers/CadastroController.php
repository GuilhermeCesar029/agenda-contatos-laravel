<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CadastroController extends Controller
{
    public function index(){
        return view('cadastro.index');
    }

    public function store(Request $request){
        $this->validate($request,[
            'nome'           => 'required',
            'sobrenome'      => 'required',
            'cpf'            => 'required',
            'data_nascimento'=> 'required',
            'telefone'       => 'required',
            'email'          => 'required',
            'password'       => 'required',
        ]);

        //cryptografando a senha
        $request['password'] = bcrypt($request['password']);

        //cadastrando os dados
        User::create($request->all());
        
        return redirect()->route('site.home');
    }
}

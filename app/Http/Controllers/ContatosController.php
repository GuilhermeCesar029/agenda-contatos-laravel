<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contatos;

class ContatosController extends Controller
{
    public function index(){
        $registros = Contatos::all();
        return view('contatos.index', compact('registros'));
    }

    public function adicionar(){
        return view('contatos.cadastro');
    }

    public function salvar(Request $request){
        $this->validate($request,[
            'nome'            => 'required',
            'sobrenome'       => 'required',
            'data_nascimento' => 'required',
            'telefone'        => 'required',
            'email'           => 'required',
            'descricao'       => 'required',
        ]);
        Contatos::create($request->all());
        return redirect()->route('admin.contatos.index');
    }

    public function info($id){
        $info = Contatos::find($id);
        return view('contatos.info', compact('info'));
    }

    public function editar($id){
        $registros = Contatos::find($id);
        return view('contatos.editar', compact('registros'));
    }

    public function atualizar(Request $request, $id){
        $registros = $request->all();
        Contatos::find($id)->update($registros);
        
        return redirect()->route('admin.contatos.index');
    }

    public function deletar($id){
        Contatos::find($id)->delete();
        return redirect()->route('admin.contatos.index');
    }

}

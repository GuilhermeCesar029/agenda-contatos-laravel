<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function entrar(Request $request){
        $dados = $request->all();
        if(Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['password']])){
            return redirect()->route('admin.contatos.index');
        }
            return redirect()->route('site.home');
        
    }

    public function sair(){
        Auth::logout();
        return redirect()->route('site.home');
    }
    
}

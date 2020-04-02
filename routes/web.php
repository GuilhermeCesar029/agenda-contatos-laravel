<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//rota principal
Route::get('/', 'HomeController@index')->name('site.home');

//Rotas para login
Route::get('/login', 'LoginController@index')->name('site.login');
Route::post('/login/entrar', 'LoginController@entrar')->name('site.login.entrar');
Route::get('/login/sair', 'LoginController@sair')->name('site.login.sair');

//Rotas para cadastro
Route::get('/cadastro', 'CadastroController@index')->name('site.cadastro');
Route::post('/cadastro', 'CadastroController@store')->name('site.cadastro.store');

//rotas protegidas
Route::group(['middleware'=>'auth'], function(){
    Route::get('/admin/contatos', 'ContatosController@index')->name('admin.contatos.index');
    Route::get('/admin/contatos/adicionar', 'ContatosController@adicionar')->name('admin.contatos.adicionar');
    Route::post('/admin/contatos/salvar', 'ContatosController@salvar')->name('admin.contatos.salvar');
    Route::get('/admin/contatos/info/{id}', 'ContatosController@info')->name('admin.contatos.info');
    Route::get('/admins/contatos/editar/{id}', 'ContatosController@editar')->name('admin.contatos.editar');
    Route::put('/admins/contatos/atualizar/{id}', 'ContatosController@atualizar')->name('admin.contatos.atualizar');
    Route::get('/admins/contatos/deletar/{id}', 'ContatosController@deletar')->name('admin.contatos.deletar');

    
});
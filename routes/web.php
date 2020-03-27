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

//Rostas para login
Route::get('/login', 'LoginController@index')->name('site.login');
Route::post('/login/entrar', 'LoginController@entrar')->name('site.login.entrar');
Route::get('/login/sair', 'LoginController@sair')->name('site.login.sair');

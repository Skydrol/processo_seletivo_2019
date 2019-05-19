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
/*
Route::get('/', function () {
    return view('index');
});*/

Route::get('/', 'UsuariosController@index');

Route::get('adicionar-usuario', function () {
    return view('add-user');
});

Route::get('atualizar-usuario/{id}', 'UsuariosController@listarUsuario');



Route::post('usuarios/criar-usuario', 'UsuariosController@criarUsuario');
Route::post('usuarios/editar-usuario', 'UsuariosController@atualizarUsuario');
Route::post('usuarios/excluir-usuario', 'UsuariosController@deletarUsuario');


Route::resource('usuarios', 'UsuariosController');

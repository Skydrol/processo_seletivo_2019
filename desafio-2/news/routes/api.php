<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Listando as notícias
Route::get('noticias', 'NoticiasController@index');
Route::post('noticias', 'NoticiasController@index');

//Listando as notícias
Route::get('noticias/pesquisa/{key}', 'NoticiasController@pesquisa');
Route::post('noticias/pesquisa/{key}', 'NoticiasController@pesquisa');


Route::get('noticias/pagina/{page}', 'NoticiasController@pagina');







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

Route::get('/', function () 
{
    return view('welcome');
});

// Rota com parametro obrigatório
Route::get('/contato/{id}', function ($id) 
{
    return 'Contato de ID: ' . $id;
});

// Rota com parametro opcional
Route::get('/contatoid/{id?}', function ($id = null) 
{

    if(isset($id))
    {
        return 'Existe';
    }
    else
    {
        return  'Não Existe';
    }
});

// TESTE DE ROTAS COM O MESMO NOME MAS MÉTODO DE REQUISIÇÃO DIFERENTE: GET E POST
Route::get('/formulario', function ()
{
    return  view('formulario');
});

Route::post('/formulario', function ()
{
    dd($_POST);
});

// Rota que redireciona para um controller
// 1° Parametro - URL da rota;
// 2° Parametro - NomeDoController@MetodoDoController
Route::get('/contatocontroller', ['uses' => 'ContatoController@index']);
Route::get('/formulariocontroller', ['uses' => 'ContatoController@formulariocontroller']);
Route::post('/formulariopostcontroller', ['uses' => 'ContatoController@formulariopostcontroller']);
Route::get('/main', ['uses' => 'ContatoController@main']);
Route::get('/listarcontatos', ['uses' => 'ContatoController@listarcontatos']);

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', ['as' => 'agenda.index', 'uses' => 'AgendaController@index']);

$app->get('/{letra}', ['as' => 'agenda.letra', 'uses' => 'AgendaController@index']);

$app->post('/busca', ['as' => 'agenda.busca', 'uses' => 'AgendaController@busca']);

$app->get('/contato/{id}/apagar', ['as' => 'pessoa.delete', 'uses' => 'PessoaController@delete']);
$app->delete('/contato/{id}', ['as' => 'pessoa.destroy', 'uses' => 'PessoaController@destroy']);

$app->get('/telefone/{id}/apagar', ['as' => 'telefone.delete', 'uses' => 'TelefoneController@delete']);
$app->delete('/telefone/{id}', ['as' => 'telefone.destroy', 'uses' => 'TelefoneController@destroy']);
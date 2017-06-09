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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'habitos', 'where'=>['id'=>'[0-9]+']], function(){

    Route::get('',              ['as'=>'habitos',           'uses'=>'HabitosController@index']);
    Route::get('create',        ['as'=>'habitos.create',    'uses'=>'HabitosController@create']);
    Route::post('store',        ['as'=>'habitos.store',     'uses'=>'HabitosController@store']);
    Route::get('{id}/destroy',  ['as'=>'habitos.destroy',   'uses'=>'HabitosController@destroy']);

    // por segurança, o laravel utiliza o get pra pegar os dados e o put pra inserir no banco
    Route::get('{id}/edit',     ['as'=>'habitos.edit',      'uses'=>'HabitosController@edit']);
    Route::put('{id}/update',   ['as'=>'habitos.update',    'uses'=>'HabitosController@update']);


});

Route::group(['prefix'=>'historico', 'where'=>['id'=>'[0-9]+']], function(){

    Route::get('',              ['as'=>'historico',           'uses'=>'HistoricoController@index']);
    Route::get('create',        ['as'=>'historico.create',    'uses'=>'HistoricoController@create']);
    Route::post('store',        ['as'=>'historico.store',     'uses'=>'HistoricoController@store']);
    Route::get('{id}/destroy',  ['as'=>'historico.destroy',   'uses'=>'HistoricoController@destroy']);

    // por segurança, o laravel utiliza o get pra pegar os dados e o put pra inserir no banco
    Route::get('{id}/edit',     ['as'=>'historico.edit',      'uses'=>'HistoricoController@edit']);
    Route::put('{id}/update',   ['as'=>'historico.update',    'uses'=>'HistoricoController@update']);


});
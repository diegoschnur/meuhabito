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

Route::get('habitos', 'HabitosController@index');
Route::get('habitos/create', 'HabitosController@create');
Route::post('habitos/store', 'HabitosController@store');
Route::get('habitos/{id}/destroy', 'HabitosController@destroy');
// por segurança, o laravel utiliza o get pra pegar os dados e o put pra inserir no banco
Route::get('habitos/{id}/edit', 'HabitosController@edit');
Route::put('habitos/{id}/update', 'HabitosController@update');
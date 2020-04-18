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


Route::get('/todos','TodosController@index');
Route::post('/todos/create',"TodosController@store");
Route::get('/todos/{id}/delete',"TodosController@delete");
Route::get('/todos/{id}/edit',"TodosController@edit");
Route::post('/todos/{id}/save',"TodosController@save");
Route::get('/todos/completed/{id}',"TodosController@complete");

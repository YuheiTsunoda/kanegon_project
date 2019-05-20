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

Route::get('/folders/{id}/tasks/create', 'ExpenseController@showCreateForm')->name('tasks.create');
Route::post('/folders/{id}/tasks/create', 'ExpenseController@create');
Route::get('/tasks/', 'ExpenseController@index')->name('tasks.index');

//Route::get('/test', function (){
//    return view('welcome');
//});

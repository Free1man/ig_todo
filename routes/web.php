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

Route::resource('tasks', 'TasksController');
Route::post('task/{task}/done',  'TasksController@doneTask');
Route::post('task/{task}/undone',  'TasksController@undoneTask');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

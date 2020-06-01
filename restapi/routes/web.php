<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('welcome');});
Route::get('/movies', 'MovieController@index')->name('movies.index');
Route::get('/movies/create', 'MovieController@create')->name('movies.create');
Route::post('/movies', 'MovieController@store')->name('movies.store');
Route::get('/movies/search', 'MovieController@search')->name('movies.search');
Route::get('/movies/result', 'MovieController@result')->name('movies.show');
Route::get('/movies/edit/search', 'MovieController@check')->name('movies.check');
Route::get('/movies/edit/result', 'MovieController@find')->name('movies.find');
Route::get('/movies/{Movie}/edit', 'MovieController@edit')->name('movies.edit');
Route::patch('/movies/{Movie}','MovieController@update')->name('movies.update');
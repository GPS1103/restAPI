<?php
use App\Movie;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {return view('welcome');});
Route::get('/list', 'ListController@index')->name('list.index');
Route::get('/add/create', 'AddController@create')->name('add.create');
Route::post('/add', 'AddController@store')->name('add.store');
Route::get('/search', 'SearchController@index')->name('search.show');
Route::get('/search/result', 'SearchController@result')->name('search.show');


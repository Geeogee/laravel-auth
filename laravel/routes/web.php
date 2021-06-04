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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index') -> name('home');
Route::get('/car/{id}', 'HomeController@show') -> name('show');

Route::get('/car/edit/{id}', 'LoggedController@edit') -> name('edit');
Route::post('/car/update/{id}', 'LoggedController@update') -> name('update');

Route::get('/car/delete/{id}', 'LoggedController@delete') -> name('delete');

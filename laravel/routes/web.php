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

Route::get('/car/edit/{id}', 'HomeController@edit') -> name('edit');
Route::post('/car/update/{id}', 'HomeController@update') -> name('update');

Route::get('/car/delete/{id}', 'HomeController@delete') -> name('delete');

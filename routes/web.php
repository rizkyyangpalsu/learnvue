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



use Illuminate\Routing\Router;

Router::get('/', function () {
    return view('welcome');
});
Router::resource('api/items', 'ItemController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
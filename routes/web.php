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

Route::get('/page', function () {
    echo "HELLO WORLD";
});

Route::get('/myview', function () {
    return view('myview');
});

Route::get('/hello', 'Testcontroller@show');

Route::resource('/admin', 'PostController');
Route::resource('/category', 'CategoryController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


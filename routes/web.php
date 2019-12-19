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

app()->setlocale('en');
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/','pages.home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

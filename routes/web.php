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
    return view('lessons');
});

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/main', 'HomeController@main')->name('main');
Route::get('/lessons', 'HomeController@lessons')->name('lessons');
Route::get('/account', 'HomeController@account')->name('account');
Route::get('/live', 'HomeController@live')->name('live');

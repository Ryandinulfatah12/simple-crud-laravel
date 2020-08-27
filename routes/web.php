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

Auth::routes();

Route::get('/home', 'UserController@index')->name('home')->middleware('auth');
Route::get('/add', 'UserController@create')->name('addUser')->middleware('auth');
Route::post('/add', 'UserController@store')->name('postUser')->middleware('auth');

Route::get('/edit/{id}', 'UserController@edit')->name('editUser')->middleware('auth');

Route::post('/edit/{id','UserController@update')->name('postEdit')->middleware('auth');
Route::delete('/delete/{id}', 'UserController@destroy')->name('deleteUser')->middleware('auth');
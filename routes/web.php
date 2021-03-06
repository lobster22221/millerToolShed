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

Route::get('/', function () {
   return view('portal');
    
});

Route::get('/blog', 'blogController@index');

Route::get('/blog/user/{post}', 'blogController@showUser');


Route::get('/blog/create', 'blogController@create');
Route::Post('/blog/');
Route::get('/blog/{post}', 'blogController@show');
Route::patch('/blog/{post}', 'blogController@show');
Route::delete('/blog/{post}', 'blogController@show');

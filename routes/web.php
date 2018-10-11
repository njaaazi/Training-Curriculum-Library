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

Route::get('/', 'HomeController@index');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/pdf/{id}', 'PdfController@index');
Route::get('/home', 'TrainingController@index');
Route::get('/home/{id}','TrainingController@show');
Route::post('/home', 'TrainingController@store');
Route::delete('/home/{id}', 'TrainingController@destroy');
Route::get('/home/edit/{id}','TrainingController@edit');
Route::put('/home/edit/{id}', 'TrainingController@update');
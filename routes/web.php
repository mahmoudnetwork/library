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

Route::get('/','LoginController@index');
//admin
Route::post('/admin','AdminController@store');
Route::get('/adminlogout','AdminController@destroy');
Route::resource('/librarain','LibraryController');

// Route::get('/librarain','LibraryController@index');
// Route::get('/librarain/create','LibraryController@create');
// Route::post('/librarain','LibraryController@store');
// Route::get('/librarain/{id}','LibraryController@show');
// Route::get('/librarain/{id}/edit','LibraryController@edit');
// Route::post('/librarain/{id}','LibraryController@update');
// Route::post('/librarain/{id}','LibraryController@destroy');

//librarain
Route::resource('/book','BookController')->middleware('auth');
Route::resource('/borrowbook','BorrowController')->middleware('auth');
Route::post('/borrowbook/{id}/{student}','BorrowController@destroy')->middleware('auth');
Auth::routes();

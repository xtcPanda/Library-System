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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/books', 'IndexController@books')->name('books');
Route::get('/books/search', 'IndexController@search')->name('books.search');

Route::post('/books/store', 'BookController@store')->name('books.store');
Route::get('/books/destroy/{id}', 'BookController@destroy')->name('books.destroy');
Route::get('/books/edit/{id}', 'BookController@edit')->name('books.edit');
Route::post('/books/update/{id}', 'BookController@update')->name('books.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

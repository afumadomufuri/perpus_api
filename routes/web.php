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

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/user/index', 'BookController@index')->name('index_user');

Route::group(['prefix' => '/member'], function(){
    Route::GET('/', 'MemberController@index')->name('member.index');
    Route::GET('/create', 'MemberController@create')->name('member.create');
    Route::POST('/', 'MemberController@store')->name('member.store');
    Route::GET('/{id}', 'MemberController@show')->name('member.show');
    Route::GET('/{id}/update', 'MemberController@edit')->name('member.edit');
    Route::PUT('/{id}', 'MemberController@update')->name('member.update');
    Route::DELETE('/{id}', 'MemberController@destroy')->name('member.delete');
});

Route::group(['prefix' => '/book'], function(){
    Route::GET('/', 'BookController@index')->name('book.index');
    Route::GET('/create', 'BookController@create')->name('book.create');
    Route::POST('/', 'BookController@store')->name('book.store');
    Route::GET('/{id}', 'BookController@show')->name('book.show');
    Route::GET('/{id}/update', 'BookController@edit')->name('book.edit');
    Route::PUT('/{id}', 'BookController@update')->name('book.update');
    Route::DELETE('/{id}', 'BookController@destroy')->name('book.delete');
});
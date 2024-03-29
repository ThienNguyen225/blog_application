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
Route::group(['prefix' =>'blogs'], function (){
   Route::get('index', 'BlogController@index')->name('blog.index');
   Route::get('create', 'BlogController@create')->name('blog.create');
   Route::post('store', 'BlogController@store')->name('blog.store');
   Route::get('{id}/show', 'BlogController@show')->name('blog.show');
   Route::get('{id}/edit', 'BlogController@edit')->name('blog.edit');
   Route::post('{id}/update', 'BlogController@update')->name('blog.update');
   Route::get('{id}/delete', 'BlogController@delete')->name('blog.delete');
   Route::post('{id}/delete', 'BlogController@destroy')->name('blog.destroy');
});
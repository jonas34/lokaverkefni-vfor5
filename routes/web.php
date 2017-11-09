<?php


Route::get('/', function () {
    return view('blogs.home');
});

Auth::routes();

Route::get('/blogs', 'BlogsController@index');
Route::post('/blogs', 'BlogsController@store');
Route::get('/blogs/create', 'BlogsController@create');
Route::get('/blogs/{id}', 'BlogsController@show');
Route::post('blogs/{id}/comment', 'CommentController@store');


Route::get('/home', 'HomeController@index')->name('home');

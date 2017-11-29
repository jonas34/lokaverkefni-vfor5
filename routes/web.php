<?php


Route::get('/', function () {
    return view('blogs.home');
});

Auth::routes();

Route::get('/blogs', 'BlogsController@index');
Route::post('/blogs', 'BlogsController@store');
Route::get('/blogs/create', 'BlogsController@create');
Route::get('/blogs/{blogs}/edit', 'BlogsController@edit');
Route::post('/blogs/{blogs}/update', 'BlogsController@update');
Route::get('blogs/{blogs}/delete', 'BlogsController@delete');
Route::get('/blogs/{blogs}', 'BlogsController@show');
Route::post('blogs/{id}/comment', 'CommentController@store');
Route::post('/blogs/{comment}/like', 'LikesController@store');



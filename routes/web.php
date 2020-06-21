<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get("/",function(){
    return view('main');
});

Route::get('/products','ProductController@index')->name('product.index');

Route::get('/create_page','ProductController@getCreatePage')->name('product.create');
Route::any('/edit/{id}','ProductController@getEditPage')->where('id','[0-9]+')->name('product.edit');
Route::get('products/{id}','ProductController@showPost')->where('id','[0-9]+')->name('show');
// without named route
Route::match(['get','post'],'/create','ProductController@createProduct');
Route::post('/edit','ProductController@editProduct');
Route::get('/delete/{id}','ProductController@deleteProduct');

// ---------------  crud blog app --------

Route::get('/posts','PostController@index');
Route::get('/post/create_page','PostController@getCreatePage');
Route::get('/post/update_page/{id}','PostController@getUpdatePage');
Route::get('/post/delete/{id}','PostController@deletePost');
Route::get('/post/{id}','PostController@showPost');

Route::post('/post/create','PostController@createPost');
Route::post('/post/update','PostController@updatePost');
//  -------        necessary topic of laravel   ---------

// ------------- chat app ---------------
Route::get('/chat','chatController@index');
Route::post('/chat/enter','chatController@enterUser');
Route::get('/chat/all','chatController@getAllUser');
Route::get('/chat/selected','chatController@selectUser');
// -------- api route for chat app -----
Route::get('/chat/insert','chatController@msgInsert');

//  ---------------  api development  ------------------
Route::get('/api','ApiController@index');

//  ---------------  users Auth  ------------------

Route::group(["middleware"=>"web"], function(){
    Route::view('/users/register','auth.register');
    Route::post('/users/register','users@register');
    Route::view('/users/login','auth.login');
    Route::post('/users/login','users@login');
});

Route::get('/users/logout','users@logout');

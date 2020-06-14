<?php

use Illuminate\Support\Facades\Route;


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

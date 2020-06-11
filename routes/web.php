<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/page/{id}', function ($id) {
//     echo $id;
//     return view('simple');
// });
// Route::get('/y/{id}','users@index');
// Route::view('/without','fun');
// Route::get('/user/login','users@login');

Route::get("/",function(){

    return view('main');
});
Route::get('/products','Products@index')->name('product.index');
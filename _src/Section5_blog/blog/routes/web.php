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
    return view('welcome',['name'=>'Guest']);
});

Route::get('/aboutme', function () {
    return view('about');
})->name('knowus');

Route::view('service','service',['services'=>['Training','Consulting','Development']]);

Route::resource('posts','PostsController');

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


Route::get('tentang/index', function () {
    return view('tentang.index');
});
Route::get('tentang/kontak',function(){
	return view('tentang.kontak');
});
Route::get('tentang/tentang',function(){
	return view('tentang.tentang');
});
Route::get('produk',function
	(){
		return view('produk');
	});

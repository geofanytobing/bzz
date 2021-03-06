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


Route::get('/murid',function(){
	return view('bantuan.murid');
});
Route::get('/guru',function(){
	return view('bantuan.guru');
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
Route::get('login',function(){
	return view('login');
});

Route::geT('daftar',function(){
	return view('daftar');
});
Route::get('bootcamp',function(){
	return view('bootcamp');
});
Route::get('/admin',function(){
	return view('Admin.index');
});
Route::get('/admin/profile',function(){
	return view('Admin.profile');
});
Route::get('/pesan', 'TesController@pesan');
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
    return view('pegawai.index');
});

Route::get('about', function () {
	return view('about');

});

Route::get('student/{id}/{name}', function ($id, $name) {
	return 'Saya siswa dengan id '.$id.' dan nama '.$name;
});

Route::get('master/halaman-pegawai', function () {
	return 'Halaman Pegawai';
})->name('employee');

Route::get('emp', function(){
	return redirect()->route('employee');
});
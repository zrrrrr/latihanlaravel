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
    return view('pages.homepage');
});

Route::get('about', function () {
	return view('about');
});

Route::get('siswa', 'Siswa\SiswaController@index');
Route::get('siswa/create', 'Siswa\SiswaController@create');
Route::post('siswa', 'Siswa\SiswaController@store');
Route::get('siswa/{siswa}', 'Siswa\SiswaController@show');


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





Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' =>['auth']], function(){
	Route::get('about', function () {
		return view('about');
	});

	Route::get('/', function () {
		return view('pages.homepage');
	});
		
	Route::resource('/siswa','Siswa\SiswaController');
	Route::post('siswa/cari', 'Siswa\SiswaController@cari');
});

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});
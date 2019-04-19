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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

	
Route::get('/mahasiswa', function(){
	return 'Ini halaman mahasiswa';
});

Route::get('/prodi', ['middleware' => 'auth','uses' =>'ProdiController@index']);
Route::get('/prodi/new', ['middleware' => 'auth','uses' =>'ProdiController@create']);
Route::post('/prodi/new', ['middleware' => 'auth','uses' =>'ProdiController@store']);
Route::get('/prodi/edit/{id}', ['middleware' => 'auth','uses' =>'ProdiController@edit']);
Route::post('/prodi/edit/{id}', ['middleware' => 'auth','uses' =>'ProdiController@update']);
Route::delete('/prodi/delete/{id}', ['middleware' => 'auth','uses' =>'ProdiController@destroy']);

Route::get('/datadosen', 'datadosenController@index');
Route::get('/datadosen/new','datadosenController@create');
Route::post('/datadosen/new','datadosenController@store');
Route::get('/datadosen/edit/{id}', 'datadosenController@edit');
Route::post('/datadosen/edit/{id}', 'datadosenController@update');
Route::delete('/datadosen/delete/{id}', 'datadosenController@destroy');

Route::get('/mahasiswa', 'mahasiswaController@index');
Route::get('/mahasiswa/new', 'mahasiswaController@create');
Route::post('/mahasiswa/new', 'mahasiswaController@store');

Route::get('/mahasiswa2', ['middleware' => 'auth','uses' =>'Mahasiswa2Controller@index']);
Route::get('/mahasiswa2/new', ['middleware' => 'auth','uses' =>'Mahasiswa2Controller@create']);
Route::post('/mahasiswa2/new', ['middleware' => 'auth','uses' =>'Mahasiswa2Controller@store']);
Route::get('/mahasiswa2/edit/{id}', ['middleware' => 'auth','uses' =>'Mahasiswa2Controller@edit']);
Route::post('/mahasiswa2/edit/{id}', ['middleware' => 'auth','uses' =>'Mahasiswa2Controller@update']);
Route::delete('/mahasiswa2/delete/{id}', ['middleware' => 'auth','uses' =>'Mahasiswa2Controller@destroy']);

Route::get('/home', 'HomeController@index')->name('home');

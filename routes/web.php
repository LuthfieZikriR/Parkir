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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'parkir'],function(){
	Route::get('/','ParkirController@index');
	Route::get('/input','ParkirController@create');
	Route::post('/save','ParkirController@save');
	Route::get('/data','ParkirController@data');
	Route::get('/hapus/{id}','ParkirController@hapus');
	Route::get('/edit/{id}','ParkirController@edit');
	Route::patch('/update/{id}','ParkirController@update');


});

Route::group(['prefix'=>'transaksi'],function(){
	Route::get('/{id}','TransaksiController@index');
	Route::post('/bayar','TransaksiController@bayar');
	Route::get('/struk/{id}','TransaksiController@struk');
});

Route::group(['prefix'=>'fasilitas'],function(){
	Route::get('/hariini','TransaksiController@laporan');
});
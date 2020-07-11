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
    return view('tampilan'); //sebelumnya erd
});

Route::get('/master', function () {
    return view('adminlte.master');
});

Route::get('/pertanyaan/create', 'ItemController@create'); // menampilkan halaman form
Route::post('/pertanyaan', 'ItemController@store'); // menyimpan data
Route::get('/pertanyaan', 'ItemController@index'); // menampilkan semua
Route::get('/pertanyaan/{id}', 'ItemController@show'); // menampilkan detail item dengan id 
Route::get('/pertanyaan/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
Route::put('/pertanyaan/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/pertanyaan/{id}', 'ItemController@destroy'); // menghapus data dengan id

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store');
<?php

use Illuminate\Support\Facades\Route;

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

//pagescontroller
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

//mahasiswacontroller
Route::get('/mahasiswa', 'MahasiswaController@index');

//datamahasiswacontroller
Route::get('/datamahasiswa', 'DataMahasiswaController@index');
Route::get('/dataMahasiswa/create', 'DataMahasiswaController@create');
Route::get('/datamahasiswa/{datamahasiswa}', 'DataMahasiswaController@show');
Route::post('/datamahasiswa', 'DataMahasiswaController@store');

Route::delete('datamahasiswa/{datamahasiswa}','DataMahasiswaController@destroy');

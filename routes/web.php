<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\EkskulController;
use app\Http\Controllers\PendaftaranController;
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

// CRUD sekolah
Route::get('/admin', 'App\Http\Controllers\EkskulController@indexekskul');
// Route::get('/admin/kamar', 'App\Http\Controllers\YghotelController@indexkamar');
Route::get('/admin/tambah', 'App\Http\Controllers\EkskulController@tambaheks')->name('ekskul.tambah');
Route::post('admin/store','App\Http\Controllers\EkskulController@storeekskul')->name('ekskul.store');
Route::get('admin/edit/{eks}','App\Http\Controllers\EkskulController@editeks')->name('ekskul.edit');
Route::patch('admin/update/{eks}', 'App\Http\Controllers\EkskulController@updateeks')->name('ekskul.update');
Route::delete('admin/delete/{eks}', 'App\Http\Controllers\EkskulController@destroy')->name('ekskul.remove');

// // pendaftaran
Route::get('/order/tambah', 'App\Http\Controllers\PendaftaranController@tambahpen')->name('order.tambah');
Route::post('order/store','App\Http\Controllers\PendaftaranController@storeorder')->name('order.store');
Route::get('/order', 'App\Http\Controllers\PendaftaranController@vieworder');
Route::get('/order/view', 'App\Http\Controllers\PendaftaranController@indexorder');
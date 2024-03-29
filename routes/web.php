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


Route::get('/','HomeController@homepage');
Route::prefix('registrasi')->group(function(){
    Route::get('kerjapraktek','RegistrasiController@kerjapraktek');
    Route::get('riset','RegistrasiController@riset');
    Route::get('kunjungan','RegistrasiController@kunjungan');
    Route::get('statuspendaftaran','RegistrasiController@statuspendaftaran');

    Route::post('func_insertkerjapraktek','RegistrasiController@func_insertkerjapraktek');
});

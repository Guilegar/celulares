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

Route::get('home', function () {
    return view('layouts.app');
});


Route::resource('local','LocalController');
Route::resource('proveedor','ProveedorController');
Route::resource('producto','ProductoController');
Route::resource('asesor','AsesorController');
Route::resource('dispositivo','DispositivoController');
Route::resource('movimiento','MovimientoController');


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
//Ruta del inicio
Route::get('/', function () {
    return view('inicio');
});



//Ruta que va al area de ventas
Route::view('/ventas_mascotas', 'ventas.ventas_mascotas.balance')->name('ventas_mascotas');
Route::view('/ventas_mascotas/ventas', 'ventas.ventas_mascotas.ventas')->name('ventas');

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



//Rutas de el area de ventas Mascotas


 //Rutas que gestionan las ventas
Route::view('/ventas_mascotas', 'ventas.ventas_mascotas.balance')->name('ventas_mascotas');

Route::view('/ventas_mascotas/ventas/ventas_esperadas', 'ventas.ventas_mascotas.ventas_formularios.ventas_esperadas')->name('ventas_esperadas');


Route::view('/ventas_mascotas/ventas/ventas_realizadas', 'ventas.ventas_mascotas.ventas_formularios.ventas_realizadas')->name('ventas_realizadas');


Route::view('/ventas_mascotas/ventas/toneladas_producidas', 'ventas.ventas_mascotas.ventas_formularios.toneladas_producidas')->name('toneladas_producidas');




//Rutas que gestionan los reclamos

Route::view('/ventas_mascotas/alta_reclamación', 'ventas.ventas_mascotas.reclamaciones.alta_reclamaciones')->name('alta_reclamaciones');

Route::view('/ventas_mascotas/detalles_reclamacion', 'ventas.ventas_mascotas.reclamaciones.detalles_reclamaciones')->name('detalles_reclamaciones');


//Rutas que pertenecen a los clientes
Route::view('/ventas_mascotas/nuevos_clientes', 'ventas.ventas_mascotas.clientes.clientes')->name('clientes');



//Rutas que pertenecen a las visitas
Route::view('/ventas_mascotas/visitas', 'ventas.ventas_mascotas.clientes.visitas')->name('visitas');


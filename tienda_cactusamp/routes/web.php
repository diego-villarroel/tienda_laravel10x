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

Route::get('/', function () {
    // return view('welcome');
    return view('inicio');
});
// 
Route::get('/productos','CactusAmpProductosController@vistaProductos');
Route::get('/productos/amps','CactusAmpProductosController@vistaProductos');
Route::get('/productos/pedales','CactusAmpProductosController@vistaProductos');
Route::get('/productos/otros','CactusAmpProductosController@vistaProductos');
Route::post('/detalle_producto','CactusAmpProductosController@detalleProducto');
Route::get('/checkout','CactusAmpProductosController@vistaCheckout');
Route::post('/registro_compra','CactusAmpProductosController@registroCompra');
// 
Route::get('/nosotros','CactusAmpController@vistaNosotros');
Route::get('/artistas','CactusAmpController@vistaArtistas');
Route::get('/contacto','CactusAmpController@vistaContacto');
//

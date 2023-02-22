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
*/

Route::get('/', function () {
    return view('welcome');
});
//para poder poder hacer uso del archivo como tal referenciamos el nombre(name), asim podemos modificar la ruta de navegación.
Route::get('/inicio', function () {

    $nom  = "Ramona la mona";
//con with pasamos los parametros de una vista
//aqui pasamos $nom a nombre que es el parametro de la vista
    return view('inicio')->with('nombre', $nom);
})->name('inicios');

Route::get('/contacto', function () {
    return view('contacto');
});
//
Route::get('saludos/{nombre}', function ($nombre) {
    return "Saludos mi ".$nombre;
});
// solucion de error "not found" en la ruta, caundo no se coloca un dato en la ruta
Route::get('saludo/{us?}', function ($us = "invitado") {
    return "Saludos " .$us;
});
//
Route::get('ligas/', function () {
    echo "<a href='".route('inicios')."'>Inicio</a>";
});
<?php

use Comidas_Tipicas\Modelos\Receta;
use Comidas_Tipicas\Modelos\Recenia;

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

// ruta ajax para validar los datos del login
Route::post('/login_validacion', 'usuarioControlador@validacionDatosLogin');
// ruta que muestra el login
Route::get('/login', 'usuarioControlador@viewLogin');
// ruta para cerrar sesion
Route::get('/cerrar_sesion', 'usuarioControlador@cerrarSesion');
Route::resource('/usuarios', 'usuarioControlador');

Route::get('/', function () {
    $recetas = Receta::getTopTresRecetas();
    $resenias = Recenia::all();
    return view('main.home', ['recetas' => $recetas, 'resenias' => $resenias]);
});

Route::get('/contacto', function () {
    return view('main.contacto');
});

// recetas
Route::resource('recetas', 'recetaControlador');
Route::get('recetas/form/{tipo}/{accion}/{id?}', 'recetaControlador@viewRecetaSegunTipo');

// ruta de quienes somos
Route::get('qs', function(){
    return view('main.qs');
});

// resenias
Route::resource('/resenias', 'receniaControlador');

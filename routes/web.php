<?php

use Comidas_Tipicas\Modelos\Receta;

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
    return view('main.home', ['recetas' => $recetas]);
});

Route::get('/contacto', function () {
    return view('main.contacto');
});

// recetas
Route::resource('recetas', 'recetaControlador');
Route::get('recetas/add/{tipo}', 'recetaControlador@viewRecetaSegunTipo');

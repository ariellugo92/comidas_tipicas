<?php

namespace Comidas_Tipicas\Http\Controllers;

use Illuminate\Http\Request;
use Comidas_Tipicas\Modelos\Usuario;

class usuarioControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
    * Metodo para validar los datos del login
    *
    * @param $request obteniendolos por ajax
    * @return JSON datos de informacion de estado
    */
    public function validacionDatosLogin(Request $request){
        // obteniendo los datos
        $usuario = $request->txtUsuario;
        $pass = $request->txtPassword;

        // validando que los datos no esten vacios
        if(empty($usuario) || empty($pass)){
            // si los datos estan vacios
            return response()->json(['val' => 'datos_vacios'], 500);
        }

        // consultando al modelo
        $val_datos = Usuario::ExistUsuariosSegunDatos($usuario,$pass);
        // validando si el objeto esta vacio
        if(! $val_datos){
            // si esta vacio es porque no existe un usuario con esos datos
            return response()->json(['val' => 'datos_incorrectos'], 403);
        }

        // creando la sesion
        session(['user_conectado' => $usuario]);
        // si llego hasta aqui es porque los datos estan correctos y retornamos el valor de true
        return response()->json(['val' => 'true'], 200);
    }

    /**
    * Metodo para retornar la vista del login
    *
    * @return la vista asociada al login
    */
    public function viewLogin(){
        return view('login');
    }

    /**
    * Metodo para cerrar la sesion
    *
    * @return la vista asociada al login
    */
    public function cerrarSesion(){
        session()->forget('user_conectado');
        session()->regenerate();

        return redirect()->back();
    }
}

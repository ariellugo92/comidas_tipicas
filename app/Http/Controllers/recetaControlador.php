<?php

namespace Comidas_Tipicas\Http\Controllers;

use Illuminate\Http\Request;
use Comidas_Tipicas\Modelos\Receta;
use Comidas_Tipicas\Modelos\Receta_Ingrediente;

class recetaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recetas = Receta::where('estado', 1)->get();
        return view('main.recetas', ['recetas' => $recetas]);
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
        // obteniendo los valores que vienen en el request
        $nombre = $request->txtNombre;
        $resenia = $request->txtResenia;
        $arr_ingredientes = $request->ingredientes;
        $procedimientos = $request->txtProcedimientos;
        // los ingredientes se obtienen de la sig forma: arroz,azucar,etc
        $ingredientes = $request->ingredientes;
        // los separamos por comas y obtenemos un array
        $arr_ingredientes_separados = explode(',', $ingredientes);

        // validando que los datos no esten vacios
        if (empty($nombre) || empty($resenia) || empty($arr_ingredientes) || empty($procedimientos)) {
            return response()->json(['val' => 'datos_vacios'], 500);
        }

        // obteniendo el tipo de receta a guardar
        $tipo = -1;
        if ($request->tipo == 'comida') {
            $tipo = 0;
        }
        if ($request->tipo == 'bebida') {
            $tipo = 1;
        }
        if ($request->tipo == 'postre') {
            $tipo = 2;
        }

        // cargando el objeto con los datos obtenidos
        $receta = new Receta;
        $receta->nombre = $nombre;
        $receta->resenia = $resenia;
        $receta->procedimiento = $procedimientos;
        $receta->tipo = $tipo;
        $receta->id_usuario = 1;

        // guardando la imagen
        if ($_FILES) {
            // si hay una imagen
            // ruta temporal del archivo (cache)
            $tempFile = $_FILES['fileImg']['tmp_name'];
            // indicando la ruta donde se van a guardar
            $filePath = public_path('recursos/img-recetas/');
            // obteniendo el nombre de la imagen
            $filename = uniqid() . '-' . $_FILES['fileImg']['name'];
            // creando la ruta de la nueva imagen
            $fullPath = $filePath . '/' . $filename;

            // validando que no exista una imagen con ese nombre
            if (!file_exists($fullPath)) {
                // si no existe movemos la imagen del cache al servidor
                if (! move_uploaded_file($tempFile, $fullPath)) {
                    // si ocurrio un error al moverlo
                    return response()->json(['val' => 'img-false', 'mensjae'], 500);
                }

                // si llego hasta aqui es porque la imagen se guardo y cargamos el objeto
                $receta->url_img = $filename;
            }
        }
        
        // guardando en la bd
        if ($receta->save()) {
            // si la receta se guardo, guardar los ingredientes
            // obteniendo el id de la receta recien guardada
            $id_receta = $receta->id;
            // recorriendo los ingredientes
            foreach ($arr_ingredientes_separados as $ingrediente) {
                # cargando el objeto
                $ri = new Receta_Ingrediente;
                $ri->id_receta = $id_receta;
                $ri->ingrediente = $ingrediente;

                // guardando en la bd
                $ri->save();
            }
            return response()->json(['val' => 'success'], 200);
        }

        // si llego hasta aqui ocurrio un error
        return response()->json(['val' => 'error'], 500);
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
    * metodo para agregar una receta segun su tipo
    */
    public function viewRecetaSegunTipo($tipo)
    {
        return view('main.add_receta', ['tipo' => $tipo]);
    }
}

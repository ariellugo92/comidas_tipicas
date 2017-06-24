<?php

namespace Comidas_Tipicas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    // datos editables
    protected $fillable = [
        'nombre', 'resenia', 'procedimiento', 'tipo', 'visitas', 'id_usuario', 'estado'
    ];

    protected $table = 'recetas';

    public $timestamps = true;

    /**
    * Metodo para sumar la visita cuando miren una
    *
    * @param $id_receta Id de la receta a modificar
    */
    public static function sumarVisitaReceta($id_receta){
        $cantidad = Receta::select('visitas')->where('id', $id_receta)->first();
        $cantidad_actual = $cantidad->visitas;
        $cantidad_mod = $cantidad_actual + 1;

        $receta_mod = Receta::find($id_receta);
        $receta_mod->visitas = $cantidad_mod;
        $receta_mod->save();
    }

    /**
    * Metodo para retornar las 3 recetas mas buscadas
    */
    public static function getTopTresRecetas(){
        $top_tres = Receta::where('estado', 1)->orderBy('visitas', 'desc')->take(3)->get();
        return $top_tres;
    }
}

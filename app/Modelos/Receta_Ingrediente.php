<?php

namespace Comidas_Tipicas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Receta_Ingrediente extends Model
{
    // datos editables
    protected $fillable = [
        'id_receta', 'ingrediente', 'estado'
    ];

    protected $table = 'receta_ingrediente';

    public $timestamps = true;
    
    /**
    * Metodo para obtener los ingredientes segun la receta
    * 
    * @param $id_receta Id de la receta a buscarle los ingredientes
    * @return $r_i[] Arreglo de los ingredientes de la receta
    */
    public static function getIngredientesSegunReceta($id_receta){
        $r_i = Receta_Ingrediente::select('ingrediente')->where('id_receta', $id_receta)->get();
        return $r_i;
    }
}

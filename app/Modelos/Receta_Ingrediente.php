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
}

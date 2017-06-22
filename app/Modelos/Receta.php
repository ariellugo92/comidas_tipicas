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

    protected $timestamps = true;
}

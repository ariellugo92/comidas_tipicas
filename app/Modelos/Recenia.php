<?php

namespace Comidas_Tipicas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Recenia extends Model
{
    // datos editables
    protected $fillable = [
        'autor', 'restaurante', 'resenia', 'id_usuario', 'estado'
    ];

    protected $table = 'resenias';

    public $timestamps = true;
}

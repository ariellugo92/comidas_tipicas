<?php

namespace Comidas_Tipicas\Modelos;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // datos editables
    protected $fillable = [
        'user', 'password', 'estado',
    ];

    protected $table = 'usuarios';

    public $timestamps = true;
}

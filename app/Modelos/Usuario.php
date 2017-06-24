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

    /**
    * Metodo para validar los datos del login
    *
    * @param $user Usuario con el que se loguea
    * @param $pass Clave de acceso al sistema
    * @return boolean True si existe o false en caso contrario
    */
    public static function ExistUsuariosSegunDatos($user, $pass){
        // obteniendo al usuario
        $pass_hash = hash('sha256', $pass);
        $usuario = Usuario::where('user', $user)->where('password', $pass_hash)->first();
        return $usuario;
    }

    /**
    * Metodo para obtener los datos del usuario 
    *
    * @param $user Usuario ha encontrar
    * @return Objeto Usuario con todos sus datos
    */
    public static function getDatosUsuario($user){
        $usuario = Usuario::where('user', $user)->first();
        return $usuario;
    }
}

<?php

use Comidas_Tipicas\Modelos\Usuario;

function getDatosUsuarioConectado(){
    $usuario_sesion = session('user_conectado');
    $datos_usuario = Usuario::getDatosUsuario($usuario_sesion);
    return $datos_usuario;
}
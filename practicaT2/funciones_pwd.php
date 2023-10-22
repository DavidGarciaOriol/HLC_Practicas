<?php
function dame_tabla_pwd() {
    // Construir y devolver la tabla de usuarios y contraseñas.
    $usuarios = array(
        "Ana" => "ana123",
        "Pedro" => "pedro456",
        "Marta" => "mar1234",
        "Luis" => "luis789",
        "Isa" => "isa0000"
    );
    return $usuarios;
}

function comprobar_pwd($usuario, $contrasena, $tablaUsuarios) {
    // Comprobar si el usuario y la contraseña coinciden con la tabla de usuarios.
    if (array_key_exists($usuario, $tablaUsuarios) && $tablaUsuarios[$usuario] === $contrasena) {
        return true;
    } else {
        return false;
    }
}
?>
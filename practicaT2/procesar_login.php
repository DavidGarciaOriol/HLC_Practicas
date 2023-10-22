<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
    <title>Formulario de Login</title>
    <script src="script.js"></script>
</head>
<body>
    <h1>Formulario de Login</h1>
    <form action="procesar_login.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario"><br><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena"><br><br>

        <input type="submit" name="acceder" value="Acceder">
    </form>
</body>
</html>

<?php
    include 'funciones_pwd.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        if (empty($usuario)) {
            echo "Debes completar el campo de usuario.";
                
        } else {
            $tablaUsuarios = dame_tabla_pwd();
            $contrasenaCorrecta = comprobar_pwd($usuario, $contrasena, $tablaUsuarios);

            if ($contrasenaCorrecta) {
                echo "Acceso autorizado para el usuario $usuario.";
            } else {
                echo "Error: Contraseña incorrecta.";
            }
        }
    }
?>
<?php

// Conecta a la base de datos  con usuario, contraseña y nombre de la BD
$servidor = "localhost:50"; $usuario = "root"; $contrasenia = ""; $nombreBaseDatos = "empleados";
$conexionBD = mysql_connect($servidor, $usuario, $contrasenia, $nombreBaseDatos);

?>
<?php

require'conexion.php';

session_start();

$usuario = $_POST['username'];
$clave = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE nombre_completo='$usuario' AND contraseña='$clave'";

$consulta = pg_query($conexion, $query);
$cantidad = pg_num_rows($consulta);

if($cantidad>0){
    $_SESSION['nombre_usuario'] = $usuario;
    header('Location:ingreso.php');
}else{
    echo 'Usuario o contraseña incorrectos';
}

?>
<?php

session_start();
$user = $_SESSION['nombre_usuario'];
echo "Bienvenido $user";

?>
<?php
session_start();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$_SESSION ['usuario'] = $usuario; //esto nos permite que el nombre de usuario esté disponible en toda la web
echo "Los datos en el formulario: <br/>";
echo "El nombre es " . $nombre . "<br/>";
echo "El apellido es " . $apellido . "<br/>";
echo "El nombre de usuario es " . $_SESSION['usuario'] . "<br/>";
?>
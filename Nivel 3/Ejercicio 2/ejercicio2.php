<?php
include_once 'Car.php';
/*Creamos un coche*/
$car1 = new Car ("Nissan", "7414 BGW", "Gasoil", 205);
/*Usamos el método para mostrar todos los datos*/
$car1->mostrarDatos();
echo PHP_EOL;
/*por último usamos la función creada en el trait Turbo*/
$car1->boost();

?>
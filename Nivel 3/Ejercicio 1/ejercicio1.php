<?php
include_once 'Especialidad.php';

$especialidad1 = new Especialidad ("Programación", Tema::PHP, "www.php.com", Recurso::Articulo);
/*Mostramos los diferentes valores del obejto $especialidad1*/
echo $especialidad1->getNombre() . PHP_EOL;
echo $especialidad1->getTema()-> name. PHP_EOL;
echo $especialidad1->getUrl() . PHP_EOL;
echo $especialidad1->getRecurso()-> name . PHP_EOL;
echo PHP_EOL;
/*Cambiamos el nombre y mostramos el nuevo nombre*/
$especialidad1->setNombre("Front");
echo $especialidad1->getNombre() . PHP_EOL;
echo PHP_EOL;
/*Cambiamos el tema y mostramos el nuevo tema*/
$especialidad1->setTema(Tema::Laravel);
echo $especialidad1->getTema()-> name. PHP_EOL; // para obtener un valor de enum en cadena de texto usamos la propiedad name
echo PHP_EOL;
/*Cambiamos la url mostramos la nueva url*/
$especialidad1->setUrl("www.php_programacion.com");
echo $especialidad1->getUrl() . PHP_EOL;
echo PHP_EOL;
/*Por último cambiamos el recurso y mostramos el nuevo recurso*/
$especialidad1->setRecurso(Recurso::Video);
echo $especialidad1->getRecurso()-> name . PHP_EOL;
echo PHP_EOL;
/*Ahora mostramos todos los datos usando el método que hemos creado para ello*/
$especialidad1->motrarDatos();

?>
<?php
include('Archivo.php');
$archivo = new Archivo();
echo "El path del archivo es ". $archivo->getArchivo() . PHP_EOL;
echo "El directorio del archivo es ". $archivo->getDirectorio() . PHP_EOL;

?>
<?php
include('Persona.php');
include('Perro.php');
/*La clase Persona está creada sin funciones mágicas para ajustar ni modificar sus atributos*/
/*instanciamos una persona*/
$persona1 = new Persona("Alberto", 49);

/*ahora vemos los atributos usando el getNombre y getEdad*/
echo "El nombre de la persona es " . $persona1->getNombre() . PHP_EOL;
echo "La edad de la persona es " . $persona1->getEdad() . PHP_EOL;
/*Vamos a sobreescribir el nombre*/
$persona1->setEdad(29); //Ojalá
/*Obtenemos los atributos actualizados*/
echo "El nombre de la persona es " . $persona1->getNombre() . PHP_EOL;
echo "La edad de la persona es " . $persona1->getEdad() . PHP_EOL;
/*La clase Perro está creada con funciones mágicas __set y __get*/
/*Instanciamos un perro*/
$perro1 = new Perro();// no es necesario declarar valores para ningún atributo
/*creamos las diferentes propiedades (propiedades = atributos) al mismo tiempo que les damos un valor*/
$perro1->nombre = "Rintitin";
$perro1->raza = "Pastor Aleman";
$perro1->edad = 7;
/*a continuación mostramos los atributos (__get)*/
echo "El nombre del perro es " . $perro1->__get("nombre") . PHP_EOL;
echo "La raza del perro es " . $perro1->__get("raza") . PHP_EOL;
echo "La edad del perro es de " . $perro1->__get("edad") . " años." . PHP_EOL;
/*sobreescribimos las propiedades nombre y raza*/
$perro1->nombre = "Bethoven";
$perro1->raza = "San Bernardo";
/*Volvemos a mostrar atributos actualizados*/
echo "El nombre del perro es " . $perro1->__get("nombre") . PHP_EOL;
echo "La raza del perro es " . $perro1->__get("raza") . PHP_EOL;
echo "La edad del perro es de " . $perro1->__get("edad") . " años." . PHP_EOL;
/*pedimos mostrar un atributo que no se ha creado*/
echo "El perro está vacunado? " . $perro1->__get("vacuna") . PHP_EOL;
/* por último usamos la función para mostrar el Array con todos los atributos y sus valores almacenados*/
$perro1->mostrarAtributos();
/*Vamos a crear otro perro a ver que pasa*/
$perro2 = new Perro();
$perro2->nombre = "Lassie";
$perro2->vacuna = true;
$perro2->edad = 10;
echo "El nombre del perro es " . $perro2->__get("nombre") . PHP_EOL;
echo "La raza del perro es " . $perro2->__get("raza") . PHP_EOL;
echo "La edad del perro es de " . $perro2->__get("edad") . " años." . PHP_EOL;
echo "El perro esta vacunado " . $perro2->__get("vacuna") . PHP_EOL;
$perro2->mostrarAtributos();
?>
<?php
class Perro{
    /* creamos una array para almacenar los atributos esto nos permite crearlos si predefinirlos*/
    private $atributos = array();
    /* implementamos el __set que nos dejará no solo ajustar el atributo, sino que además lo podremos crear en el caso de no existir*/
    public function __set($nombre, $valor){ //declaramos como se llamará el atributo y el valor que tendrá
        echo "Creamos el atributa " . $nombre . " y le damos el valor de " . $valor . PHP_EOL;
        $this->atributos[$nombre] = $valor; //Creamos y setteamos
    }
     /* implementamos el __get que nos mostrará los atributos, en el caso de no existir dicho atributo nos indicará que no existe*/
    public function __get($nombre){ //recibe el nombre del atributo
        if (array_key_exists($nombre, $this->atributos)) { //busca el atributo en el array y si lo encuntra
            return $this->atributos[$nombre]; // devolvemos el valor
        } else {
            echo "El atributo no ha sido creado" . PHP_EOL; //si no lo encuentra lo idicamos
        }
    }
    /*aplicando esta función nos mostrará el estado actual del array con los atributos creados y sus valores*/
    public function mostrarAtributos(){
        echo "El contenido del Array de atributos es: " . PHP_EOL;
        print_r($this->atributos);
    }
}
?>
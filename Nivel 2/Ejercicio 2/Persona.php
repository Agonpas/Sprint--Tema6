<?php
class Persona {
    /*declaramos los atributos para la clase*/
    private string $nombre;
    private int $edad;
    /*Cremoas el constructor usando método mágico __construct*/
    public function __construct(string $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    /*Creamos setters para sobreescribir los atributos*/
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setEdad($edad) {
        $this->edad = $edad;
    }

    /*creamos getters para ver los diferentes atributos*/ 
    public function getNombre(): string {
        return $this->nombre;
    }
    public function getEdad(): int {
        return $this->edad;
    }
}

?>
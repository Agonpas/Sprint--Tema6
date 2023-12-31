<?php
enum Tema {
    case PHP;
    case CSS;
    case HTML;
    case SQL;
    case Laravel;
}
enum Recurso {
    case Fichero;
    case Articulo;
    case Video;
}
class Especialidad {
    private string $nombre;
    private Tema $tema;
    private string $url;
    private Recurso $recurso;

    public function __construct(string $nombre, Tema $tema, string $url, Recurso $recurso) {
        $this->nombre = $nombre;
        $this->tema = $tema;
        $this->url = $url;
        $this->recurso = $recurso;
    }
    /*Setters*/
    public function setNombre (string $nombre) {
        $this->nombre = $nombre;
    }
    public function setTema (Tema $tema) {
        $this->tema = $tema;
    }
    public function setUrl  (String $url) {
        $this->url = $url;
    }
    public function setRecurso (Recurso $recurso) {
        $this->recurso = $recurso;
    }
    /*Getters*/
    public function getNombre(): string {
        return $this->nombre;
    }
    public function getTema(): Tema {
        return $this->tema;
    }
    public function getUrl(): string {
        return $this->url;
    }
    public function getRecurso(): Recurso {
        return $this->recurso;
    }
    public function motrarDatos(){
        echo "El nombre de la especialidad es: " . $this->nombre . PHP_EOL;
        echo "El tema es: " . $this->tema->name . PHP_EOL;
        echo "La URL: " . $this->url . PHP_EOL;
        echo "El recurso es: " . $this->recurso->name . PHP_EOL;
    }
}
?>
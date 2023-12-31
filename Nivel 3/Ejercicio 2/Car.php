<?php
include_once 'Turbo.php'; // incluimos el trait
class Car {
    /*Declaramos atributos*/
    private string $marca;
    private string $matricula;
    private string $tipoCombustible;
    private int $velocidadMax;
    /*creamos el constructor*/
    public function __construct(string $marca, string $matricula, string $tipoCombustible, int $velocidadMax) {
        $this-> marca = $marca;
        $this-> matricula = $matricula;
        $this-> tipoCombustible = $tipoCombustible;
        $this-> velocidadMax = $velocidadMax;
    }
    /*Definimos funcion para mostrar todos los datos*/
    public function mostrarDatos(){
        echo "La marca del vehiculo es: " . $this->marca . PHP_EOL;
        echo "La matricula del vehiculo es: " . $this->matricula . PHP_EOL;
        echo "El tipo de combustible que usa el vehiculo es: " . $this->tipoCombustible . PHP_EOL;
        echo "La velocidad máxima que alcanza el vehiculo es de " . $this->velocidadMax . " km/h" . PHP_EOL;
    }
    /*ahora incluimos el trait dentro de nustra clase Car*/
    use Turbo;
}
?>
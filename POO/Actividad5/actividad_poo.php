<?php
/*
Ciudadano1: Mariano, 25, 5700 = Mariano debe pagar impuestos.
Ciudadano2: Leonel, 56, 3500 = Leonel debe pagar impuestos.
Ciudadano3: Yaneth, 34, 8400 = Yaneth debe pagar impuestos.
Ciudadano4: Martín, 45, 2500 = Martín no debe pagar impuestos.
*/
class Persona{
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function imprimirDatos(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
    }
}

class Ciudadano extends Persona{
    public $deposito;

    public function __construct($nombre, $edad, $deposito)
    {
        parent::__construct($nombre, $edad);
        $this->deposito = $deposito;
    }

    public function imprimirDatos(){
        parent::imprimirDatos();
        echo "Deposito: " . $this->deposito . "<br>";
    }

    public function impuestos(){
        if($this->deposito > 3000){
            echo $this->nombre . " debe pagar impuestos.<br>";
        }else{
            echo $this->nombre . " no debe pagar impuestos.<br>";
        }
    }
}

$ciudadano = new Ciudadano("Mariano", 25, 5700);
$ciudadano->imprimirDatos();
$ciudadano->impuestos();
?>
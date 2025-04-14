<?php
class Jugador{
    //Propiedades de la clase Jugador
    public $nombre;
    public $posicion;
    public $numero;

    //Constructor de la clase Jugador
    public function __construct($nombre, $posicion, $numero)
    {
        $this->nombre = $nombre;
        $this->posicion = $posicion;
        $this->numero = $numero;
    }
        
    //Métodos de una clase
    public function entrenar(){
        echo $this->nombre ." está entrenando<br>";
    }
    public function jugar(){
        echo $this->nombre ." está jugando<br>";
    }
}

//Instancias de la clase Jugador
$jugador1 = new Jugador("James Rodriguez", "Centrocampista", 10);
$jugador1->entrenar();
$jugador1->jugar();

echo '<pre>';
print_r($jugador1);
echo '</pre>';

$jugador2 = new Jugador("Falcao Garcia", "Delantero", 9);
$jugador2->entrenar();
$jugador2->jugar();

echo '<pre>';
print_r($jugador2);
echo '</pre>';
?>
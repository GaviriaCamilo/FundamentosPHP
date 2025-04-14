<?php
//Clase padre
class SeleccionFutbol{
    public $id, $nombre, $apellidos, $edad;

    public function __construct($id, $nombre, $apellidos, $edad)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function concentrarse(){
        echo $this->nombre . " " . $this->apellidos . " está en concentración<br>";
    }
    public function viajar(){
        echo $this->nombre . " " . $this->apellidos . " está viajando<br>";
    }
}

//Clase hija (Implementando Herencia)
class Jugador extends SeleccionFutbol{
    public $posicion, $numero;

    public function __construct($id, $nombre, $apellidos, $edad, $posicion, $numero)
    {
        //Llamar al constructor de la clase padre
        parent::__construct($id, $nombre, $apellidos, $edad);
        //Inicializar las propiedades de la clase hija
        $this->posicion = $posicion;
        $this->numero = $numero;
    }

    public function entrenar(){
        echo $this->nombre . " " . $this->apellidos . " está entrenando<br>";
    }
    public function jugar(){
        echo $this->nombre . " " . $this->apellidos . " está jugando<br>";
    }
}

//Clase hija (Implementando Herencia)
class Entrenador extends SeleccionFutbol{
    public $experiencia;

    public function __construct($id, $nombre, $apellidos, $edad, $experiencia)
    {
        //Llamar al constructor de la clase padre
        parent::__construct($id, $nombre, $apellidos, $edad);
        //Inicializar las propiedades de la clase hija
        $this->experiencia = $experiencia;
    }

    public function dirigirEntrenamiento(){
        echo $this->nombre . " " . $this->apellidos . " está dirigiendo el entrenamiento<br>";
    }
    public function dirigirPartido(){
        echo $this->nombre . " " . $this->apellidos . " está dirigiendo el partido<br>";
    }
}

$jugador1 = new Jugador(19, "James", "Rodriguez", 33, "Centrocampista", 10);
$entrenador1 = new Entrenador(1, "Jose", "Pekerman", 73, 20);
echo $jugador1->concentrarse();
echo $entrenador1->dirigirPartido();

?>
<?php

// Ejercicio 1: Crear una función que reciba un nombre y lo imprima en pantalla con un saludo.
function saludo($nombre){
    echo "Hola $nombre, eres un buen desarrollador!<br>";
}
saludo("Camilo Gaviria");


// Ejercicio 2: Crear una función que reciba diferentes operacions matemáticas y las imprima.
function operaciones($numero1, $numero2, $operacion){
    $resultado = 0;
    if($operacion == "sumar"){
        $resultado = $numero1 + $numero2;
    }elseif($operacion == "restar"){
        $resultado = $numero1 - $numero2;
    }elseif($operacion == "multiplicar"){
        $resultado = $numero1 * $numero2;
    }elseif($operacion == "dividir"){
        $resultado = $numero1 / $numero2;
    }else{
        echo "No se reconoce la operación.";
    }
    return $resultado;
}
$imprimir = operaciones(5, 2, "sumar");
echo "El resultado de la operación es: $imprimir<br>";
?>
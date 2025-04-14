<?php
//Crear un programa que imprima los números del 1 al 10 utilizando un ciclo for.

for($i = 1; $i <= 10; $i++){
    echo "Número: $i <br>";
}


//Mostrar los números pares del 0 al 50
echo "<br> Números pares del 0 al 50 <br>";
for($par = 0; $par <= 50; $par++){
    if($par % 2 == 0){
        echo "Número: $par <br>";
    }
}
?>
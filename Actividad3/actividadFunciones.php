<?php
/* 
Ashley: 14 años = No puede votar
Luis Camilo: 20 años = Puede votar
Fernando: 16 años = No puede votar
Jorge: 22 años = Puede votar
*/
function checkVote($nombre, $edad){
    if ($edad >= 18){
        echo "Hola, $nombre, usted cumple con los requisitos para votar.";
    }else{
        echo "Hola, $nombre, usted <strong>no</strong> cumple con los requisitos para votar";
    }
}

$resultadoCheckVote = checkVote("Jorge", 22);
echo $resultadoCheckVote . "<br>";
?>
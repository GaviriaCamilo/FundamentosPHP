<?php
/*
Realizar un programa que envie un mensaje solo si este contiene
100 letras, caso contrario enviar un mensaje de error


$total_letras = strlen("Hola, soy un mensaje");

if($total_letras < 100){
    echo "El mensaje fue enviado exitosamente";
}else{
    echo "No se ha podido enviar el mensaje ya que contiene: " 
    . $total_letras . " letras";
}
*/



/*
Crear un programa que indique si los habirantes hablan español u otro idioma
*/

$pais = "Colombia";

if($pais == "México" || $pais == "España" || $pais == "Colombia" ){
    echo "Los habitantes hablan español";
}else{
    echo "Los habitantes hablan otro idioma";
}
?>
<?php

/*Realice un programa que imprima cuál es tu color favorito. Mostrar un ejemplo con if-else y con switch 

$colorFavorito = "verde";

if($colorFavorito == "azul"){
    echo "Tu color favorito es el: " .$colorFavorito;
}elseif($colorFavorito == "rojo"){
    echo "Tu color favorito es el: " .$colorFavorito;
}elseif($colorFavorito == "verde"){
    echo "Tu color favorito es el: " .$colorFavorito;
}else{
    echo "No hemos encontrado este color.";
}
*/

$colorFavorito = "verde";

switch($colorFavorito){
    case "azul":
        echo "Tu color favorito es el: " .$colorFavorito;
        break;
    case "rojo":
        echo "Tu color favorito es el: " .$colorFavorito;
        break;
    case "verde":
        echo "Tu color favorito es el: " .$colorFavorito;
        break;
    default:
        echo "No hemos encontrado este color.";
}
?>
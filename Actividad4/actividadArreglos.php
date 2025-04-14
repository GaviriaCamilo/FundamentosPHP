<?php
echo "RUTINA SEMANAL DEL GYM.<br>";
//Array asociativo(clave => valor)
$rutina = array(
    "Lunes" => "Pecho, Espalda, Hombros",
    "Martes" => "Piernas, Glúteos",
    "Miércoles" => "Bíceps, Espalda, Hombros",
    "Jueves" => "Tríceps, Bíceps",
    "Viernes" => "Piernas, Pantorillas",
);
//Imprimir el arreglo
echo "El día lunes toca " . $rutina["Lunes"];
?>
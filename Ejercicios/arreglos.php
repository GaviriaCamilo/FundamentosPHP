<?php
/* Formas de declarar un arreglo

$arreglo1 = array("Elemento1", 20, "Elemento3", "Elemento4", true, false, 3.14);
$arreglo2 = ["Elemento1", 20, "Elemento3", "Elemento4", true, false, 3.14];
*/

// Clave valor
$arreglo3 = array(
    'Nombre' => 'Camilo',
    'Edad' => 22,
    'País' => 'Colombia',
    'Ocupacion' => 'Desarrollador Web',
    'Estatura' => 1.75,
    'Casado' => True,
);

echo "<pre>";
var_dump($arreglo3);
echo "</pre>";

//Agregar campo al arreglo
$arreglo3['Estudia'] = True;
//Modificar valores
$arreglo3['Nombre'] = 'Camilo Andres';
//Eliminar un campo del arreglo
array_pop($arreglo3);


echo "<pre>";
var_dump($arreglo3);
echo "</pre>";

?>
<?php
/* Actividad de descuentos usando condicionales 
    1. Juan Pablo realizó una compra de $55. Con descuento queda en $49.5.
    2. Kenia Ortiz realizó una compra de $120. Con descuento queda en $102.
    3. Angie Andreade realizó una compra de $275. Con descuento queda en $220.
    4. Eva Castro realizó una compra de $350. Con descuento queda en $280.
*/

$nombreCliente = "Camilo Gaviria";
$valorCompra = 350;
$descuento = 0;

if ($valorCompra < 50) {
    $descuento = 5;
} elseif ($valorCompra < 100) {
    $descuento = 10;
} elseif ($valorCompra <= 250) {
    $descuento = 15;
} elseif ($valorCompra < 400) {
    $descuento = 20;
}

$precioFinal = $valorCompra - ($valorCompra * ($descuento / 100));

if ($descuento > 0) {
    echo "El cliente $nombreCliente tiene un descuento del $descuento% en su compra de $$valorCompra. El precio final es $$precioFinal.";
} else {
    echo "El cliente $nombreCliente no aplica para descuento en su compra de $$valorCompra. El precio final es $$valorCompra.";
}
?>

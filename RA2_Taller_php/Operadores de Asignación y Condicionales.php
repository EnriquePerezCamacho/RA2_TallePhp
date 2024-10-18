<?php
// Declarara la variable con valor 100
$numero = 100;

// Modificar el valor
$numero += 20;  // Sumar 20 (100 + 20 = 120)
$numero *= 2;   // Multiplicar el valor por 2 (90 * 2 = 180)
//Pondremos 3 para que asi pueda bajar de 100 el valor
$numero -= 30;  // Restar 30 (120 - 30 = 90)
$numero /= 3;   // Dividir el valor por 3 (180 / 3 = 60)

// La condicional if determinar el valor final si es mayor o menor que 100
if ($numero > 100) {
    echo "El valor es mayor que 100. Valor Final: " . $numero;
} elseif ($numero < 100) {
    echo "El valor es menor que 100. Valor Final: " . $numero;
} else {
    echo "El valor es igual a 100.";
}
?>

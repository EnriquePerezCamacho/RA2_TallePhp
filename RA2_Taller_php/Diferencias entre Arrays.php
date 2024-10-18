<?php
// Define los arrays
$array1 = ["rojo", "verde", "azul"];
$array2 = ["verde", "amarillo", "azul"];

// Econtrar los arrays
$diferencia = array_diff($array1, $array2);

// Imprimir los resultados
echo "Estos son los colores que están en array1 y no en el array2 son: \n";
foreach ($diferencia as $color) {
    echo "$color \n";
}
?>

<?php

$variable = "Hola, mundo!";
$mensaje = "Cruel";

// echo $variable . $mensaje . PHP_EOL;
// echo "El mensaje: $variable $mensaje" . PHP_EOL;

// Arreglos simples
// $arreglo = ["Hola", "mundo", "Cruel"];

// for ($i = 0; $i < count($arreglo); $i++) {
//     echo $arreglo[$i] . " ";
// }
// echo PHP_EOL;

$persona[0] = ["apellido" => "Ormeño", "nombre" => "Emilio", "edad" => 30];
$persona[1] = ["apellido" => "Scheffer", "nombre" => "Maru", "edad" => 15];
$persona[2] = ["apellido" => "Gonzalez", "nombre" => "Juan", "edad" => 25];
$persona[3] = ["apellido" => "Varela", "nombre" => "Martín", "edad" => 18];

// muestre por consola las personas que tienen más de 20 años
foreach ($persona as $p) {
    if ($p["edad"] > 20) {
        echo "Nombre: " . $p["nombre"] . ", Apellido: " . $p["apellido"] . ", Edad: " . $p["edad"] . PHP_EOL;
    }
}

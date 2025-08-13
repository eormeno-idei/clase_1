<?php

//$variable = "Hola, mundo!";
//$mensaje = "adios";
//echo $variable . PHP_EOL;
//echo $mensaje . PHP_EOL;

$arreglo =["hola","adios"]; 

//foreach ($arreglo as $i){
//   echo $i . PHP_EOL;
//}

for ($i=0; $i<count($arreglo); $i++){
    echo $arreglo[$i] . " ; ". PHP_EOL;
}

<?php

//$variable = "Hola, mundo!";
//$mensaje = "adios";
//echo $variable . PHP_EOL;
//echo $mensaje . PHP_EOL;

/*$arreglo =["hola","adios"]; 

//foreach ($arreglo as $i){
//   echo $i . PHP_EOL;
//}

for ($i=0; $i<count($arreglo); $i++){
    echo $arreglo[$i] . " ; ". PHP_EOL;
}
*/

// Ejemplo de un array asociativo
$mi_array_asociativo = [
    "nombre" => "Juan",
    "edad" => 30
];
//echo $mi_array_asociativo["nombre"]; // Imprime "Juan"

// Ejemplo de un array multidimensional

$persona[0] = ["apellido" => "Ormeño", "nombre" => "Emilio", "edad" => 30];
$persona[1] = ["apellido" => "Scheffer", "nombre" => "Maru", "edad" => 15];
$persona[2] = ["apellido" => "Sonzalez", "nombre" => "Juan", "edad" => 25];
$persona[3] = ["apellido" => "Varela", "nombre" => "Martín", "edad" => 18];

/*
foreach ($persona as $p) {
    if ($p["edad"] > 20) {
        echo "Nombre: " . $p["nombre"] . ", Apellido: " . $p["apellido"] . ", Edad: " . $p["edad"] . PHP_EOL;
    }
}
*/

/*

foreach ($persona as $p){
    foreach ($p as $clave => $valor) {
        if ($p["apellido"][0]=="S"){
            echo $clave . " : " . $valor . " ";
        }
    }
    echo PHP_EOL;
}

$numeros = [23, 5, 17, 42, 8, 31, 2, 19, 14, 27];
$i=0;
$bit=-1;

while ($i<count($numeros) && $bit>=-1){
    if ($numeros[$i]==17){
        $bit=$i;
        echo "POSICION : " . $i+1 . " VALOR : " . $numeros[$i] . PHP_EOL; 
    }
    $i++;
}
echo "El numero 17 se encuentra en la posición: " . $bit . PHP_EOL;
*/

class pares{
    private $numeros=null;
    private static $cont=0;
    public function __construct(){
        $this->numeros = [];
    }
    public function agregarNumeros($xnum){
        $this->numeros[self::$cont] = $xnum;
        $this->getNumeros();
        self::$cont++;
    }
    public function getNumeros(){
        foreach ($this->numeros as $numList){
            echo "[" . $numList . "]" . " ";
        } 
        echo PHP_EOL;
    }
    
}
function verificarPares($xnum){
        if ($xnum % 2 == 0){
            
            return $xnum;
        } else{
            // Si el número no es par, retorna false
            return -1;
        }
}


$listaNum= new pares();

echo "Ingrese un numero (-1 para salir): ";
$xnumero= (int) trim(fgets(STDIN));
$numV=true;
while ($xnumero != -1){
    $numV=verificarPares($xnumero);
    if($numV!=-1){
        $numV=$xnumero;
        $listaNum->agregarNumeros($numV);
            
            
    }else{
        echo "El numero ingresado no es par." . PHP_EOL;
    }
    echo "Ingrese un numero (-1 para salir): ";
    $xnumero= (int) trim(fgets(STDIN));
}

<?php
require_once "class_operation.php";

$operacion1 = new Operation(10,100);
$total_suma = $operacion1->suma_valores();
echo $total_suma."<br>";

$total_resta = $operacion1->resta_valores();
echo $total_resta."<br>";

$total_multiplicar = $operacion1->multiplicar_valores();
echo $total_multiplicar."<br>";

$total_dividir = $operacion1->dividir_valores();
echo $total_dividir."<br>";

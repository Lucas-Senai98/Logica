<?php

$produtor = 'Lucas';
$pesoAnimal1 = 35; 
$pesoAnimal2 = 45; 
$valorArroba = 331.58; 
$arroba_1 = $peso_1 / 15;
$arroba_2 = $peso_2 /15;


$valor_total = $arroba_1 + $arroba_2 * $valor_arroba ;

echo "O valor que " . $produtor . " vai receber é :" . "R$" . number_format($valor_total, 2, ',', '.');












?>
<?php
//Crie um array com números aléatorios e:
// 1. exiba os numero na ordem original.
// 2. exiba os números em ordem crescente e exiba novamente.
// 3. Ordene o array em ordem decrescente e exiba novamente.

$numeros = [15, 10, 35, 20, 18, 30, 5, 60, 45, 40];




echo "Ordem original: " . implode(", ", $numeros) . "\n"; 


sort($numeros);
echo "Ordem crescente: " . implode(", ", $numeros) . "\n";


rsort($numeros);
echo "Ordem decrescente: " . implode(", ", $numeros) . "\n";
?>


<?php

//

$frutas = ["Maça" , "Banana", "Laranja", "Uva", "Ameixa"];
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

Echo "-------------------------------------------------------------<br>";
$frutas [] = "Moango";
foreach ($frutas as $fruta) {// primeiro item no plural e segundo no singular
echo $fruta. "<br>";
}

echo "-------------------------------------------------------------<br>";

array_shift($frutas);// Remove o primeiro elemento do array 
unset($frutas[1]) // remove o elemento através do indice

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
?>

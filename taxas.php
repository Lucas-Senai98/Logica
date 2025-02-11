<?php
// Conversão de moedas 
// Crie um array associativo com as taxas de conversão de diferentes moedas para reais R$
// Dólar (USD)= 5.10
// Euro (EUR)= 5.50
// Libra (GBP)= 6.30
// Peso (ARS)= 0.005

$taxas = [
    "Dólar (USD)" => 5.10,
    "Euro (EUR)" => 5.50,
    "Libra (GBP)" => 6.30,
    "Peso (ARS)" => 0.005
];

// Função para converter moedas
function converterMoeda($valor, $taxa) {
    return $valor * $taxa;
}


$valores = [100, 200, 300];

foreach ($taxas as $moeda => $taxa) {
    foreach ($valores as $valor) {
        $valorConvertido = converterMoeda($valor, $taxa);
        echo "$valor $moeda = R$$valorConvertido\n";
    }
}
?>
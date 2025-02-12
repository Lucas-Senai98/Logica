<?php
$dados = array(
    "nome" => "João",
    "dt_nasc" => "01/01/2000",
    "documentos" => array(
        "rg" => "123456",
        "cpf" => "123.456.789-00",
        "cnh" => "12345678901234567890"
    ),
    "endereco" => array(
        "tipo" => "Rua",
        "logradouro" => "Rua A",
        "numero" => "123",
        "complemento" => "Apto 123",
        "bairro" => "Centro",
        "cidade" => "São Paulo",
        "estado" => "SP",
        "cep" => "12345-678"
    ),
    "filiacao" => array(
        "nome_mae" => "Maria das Dores",
        "nome_pai" => "José da Silva"
    ),
    "contatos" => array(
        "email" => "joao@email.com",
        "telefone" => "24 98765-4321",
        "celular" => "11 98765-4321",
        "telefone_fixo" => "24 3333-4444"
    )
);

// Função para exibir os dados recursivamente
function exibirDados($dados, $nivel = 0) {
    foreach ($dados as $chave => $valor) {
        if (is_array($valor)) {
            echo str_repeat("&nbsp;", $nivel * 4) . "<strong>$chave:</strong><br>";
            exibirDados($valor, $nivel + 1);
        } else {
            echo str_repeat("&nbsp;", $nivel * 4) . "<strong>$chave:</strong> $valor<br>";
        }
    }
}

// Exibir os dados
exibirDados($dados);
?>

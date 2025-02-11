<?php
//crie um array associativo com as seguintes informações de alunos:

    // Nome
    //Materia
    //Nota
// utilize um loop para criar um array com as informações dos alunos.
//baseado na nota, exiba uma mensagem de aprovação e reprovação.
// Se a nota for maior ou igual a 7, exiba a mensagem "Aluno aprovado".
// Se a nota for menor que 7, exiba a mensagem "Aluno em Recuperação".
//Se a nota for menor que 5, exiba a mensagem "Aluno Reprovado".




$alunos = [
    ["Nome" => "João", "Materia" => "Matemática", "Nota" => 8],
    ["Nome" => "Maria", "Materia" => "História", "Nota" => 6],
    ["Nome" => "Carlos", "Materia" => "Física", "Nota" => 4],
    ["Nome" => "Ana", "Materia" => "Química", "Nota" => 9],
    ["Nome" => "Paulo", "Materia" => "Português", "Nota" => 5],
];


   
foreach ($alunos as $aluno) {
    echo "<p>{$aluno["Nome"]} - {$aluno["Materia"]}: Nota {$aluno["Nota"]} - ";
    
    if ($aluno["Nota"] >= 7) {
        echo "Aluno Aprovado";
        
    } elseif ($aluno["Nota"] >= 5) {
        echo "Aluno em Recuperação";
    } else {
        echo "Aluno Reprovado";
    }
    echo "</p>";
}

?>

    




    


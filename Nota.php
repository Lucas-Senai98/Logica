<?php


$aluno = "Lucas";
$bim1 = 6;
$bim2 = 4;
$bim3 = 9;
$bim4 = 1;

$media = ($bim1 + $bim2 + $bim3 + $bim4) / 4;

if ($media >= 7)
{
    echo $aluno . " Você está aprovado." . " Sua media foi" .  $media;
}
else
{
    echo $aluno . " Você esta reprovado." . " Sua media foi" .  $media;
}

?>
<?php

$suaidade = 18;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($suaidade < $idadeCrianca) {

    echo "Crianca";

} elseif ($suaidade >= $idadeMaior && $suaidade < $idadeMelhor) {
    echo "Maior de idade";
} else {
    echo "Na melhor idade";
}

echo "<br>";

echo ($suaidade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>
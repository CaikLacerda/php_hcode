<?php

// require obriga que o arquivo exista e funcione, ja o include tenta funcionar mesmo que o arquivo nao exista, e possui um diretorio proprio, PATH, e pode incluir arquivos de sites (pessima pratica)

// o php tem um codigo chamado require/include "once", que serve para chamar a funcao apenas uma vez, sem repetir, evitando falhas

// include "exemplo-01.php";
require_once "exemplo-01.php";
require_once "exemplo-01.php";


$resultado = somar(10, 20);

echo $resultado;

?>
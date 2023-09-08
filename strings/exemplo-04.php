<?php

$frase = "A repeticao e mae da retencao.";

$palavra = "mae";

$q = strpos($frase, $palavra);

// var_dump($q);

$texto = substr($frase, 0, $q); // O alvo eh a frase, comece do indice 0 e va ate o indice da funcao q (14)

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); // Usamos o StrLen para saber quantos algarismos possui alguma palavra, frase ou variavel

var_dump($texto2);

?>
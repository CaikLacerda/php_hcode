<?php

$anoNascimento = 1990;

$primeiroNome = 'Caik';

$sobrenome = 'Lacerda';

//Em PHP usamos o "." para concatenar
$nomeCompleto = $primeiroNome . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo "<br/>";

// unset($nomeCompleto);

if (isset($nomeCompleto)) {
    echo $nomeCompleto;
};

?>
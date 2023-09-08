<?php

// Passagem de parametro por referencia usa-se um & na frente da variavel

$pessoa = array(
    'nome'=> 'Caik',
    'idade'=> 18
);
 
// Passando parametro por referencia
foreach ($pessoa as &$value) { 

    if(gettype($value) === 'integer') $value += 10;

    echo $value.'<br>';

}

print_r($pessoa);

?>
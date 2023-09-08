<?php

$pessoas = array();

// adicionar itens ao array depois de ter sido criado
array_push($pessoas, array(
    'nome'=>'Joao',
    'idade'=>'20'
));

array_push($pessoas, array(
    'nome'=>'Caik',
    'idade'=>'18'
));

print_r($pessoas[1]['nome']);

?>
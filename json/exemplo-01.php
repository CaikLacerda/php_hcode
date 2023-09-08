<?php

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Joao',
    'idade'=>'20'
));
array_push($pessoas, array(
    'nome'=>'Caik',
    'idade'=>'18'
));

echo json_encode($pessoas) // json_encode espera um array para que possar ser encodado

?>
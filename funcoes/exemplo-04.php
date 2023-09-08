<?php

function soma(float ...$valores):string {  // com o ":" apos a declaracao dos valores da funcao, vc pode definir qual tipo de dados sera retornado da funcao
    
    return array_sum($valores);

}

echo var_dump(soma(2,2));
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";

?>
<?php 
// Crie uma função em PHP que receba um número como parâmetro e retorne o fatorial desse número.

function factorial($num){
    $result = 1;

    for($i = $num; $i >= 1; $i--){
        $result *= $i;
    }

    return $result;
}

echo factorial(4);

?>
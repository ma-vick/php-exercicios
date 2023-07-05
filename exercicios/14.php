<?php 
// Crie um array com os números de 1 a 10 e, utilizando uma estrutura de repetição, calcule a média dos valores contidos no array.

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function averageFunction($arr){
    $sum = 0;

    foreach($arr as $number){
        $sum += $number;
    }

    $average = $sum / count($arr);
    return $average;
}

print(averageFunction($numbers));

?>
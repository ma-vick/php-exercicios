<?php 
// Crie uma função em PHP que receba um array como parâmetro e retorne o maior valor contido nele.

$numbers = array(20, 6, 11, 12, 7, 60, 55);

function higherNumber($array){
    $bigest = 0;

    foreach($array as $number){
        if($number > $bigest){
            $bigest = $number;
        }
    }

    return $bigest;
}

print "O maior número dessa lista é: " . higherNumber($numbers);

?>
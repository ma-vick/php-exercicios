<?php 
// Escreva um código em PHP que verifique se um número é primo.

$number = 22;

function isPrime($num){
    if($num <= 1){
        return false;
    }

    for($i = 2; $i < $num; $i++){
        if($num % $i === 0){
            return false;
        }
    }
    return true;
}

if(isPrime($number)){
    print 'É primo';   
} else {
    print 'Não é primo.';
}

?>
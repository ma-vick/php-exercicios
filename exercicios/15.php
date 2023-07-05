<?php 
// Crie uma função em PHP que receba um número como parâmetro e verifique se ele é um número perfeito. Um número perfeito é aquele cuja soma de seus divisores (excluindo ele mesmo) é igual ao próprio número.

$number = 13;

function isPerfectNumber($number) {
    $divisorsSum = 0;

    for ($i = 1; $i < $number; $i++) {
        if ($number % $i === 0) {
            $divisorsSum += $i;
        }
    }

    if ($divisorsSum === $number) {
        return true;
    } else {
        return false;
    }
}

if (isPerfectNumber($number)) {
    echo "$number é um número perfeito.";
} else {
    echo "$number não é um número perfeito.";
}

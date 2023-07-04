<?php
// Crie uma função em PHP que receba uma string como parâmetro e retorne a mesma string invertida.

$frasinha = 'de todas as quimeras, eu sou o rei!';
	
function invertString($string){
	print strrev($string);
}
	
invertString($frasinha);
?>

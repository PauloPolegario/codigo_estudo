<div class="titulo">Comparações Arrays</div>

<?php

$nome1 = ['nome', 'Maria', 'idade', 20];
$nome2 = ['nome', 'Maria', 'idade', 20];
var_dump($nome1 == $nome2);
var_dump($nome1 === $nome2);
echo '<br>';


$nome3 = ['idade', 20, 'nome', 'Maria'];
var_dump($nome1 == $nome2); //== IGUAL
var_dump($nome1 === $nome3); //  === ExTRITAMENTE IGUAL
echo '<br>';
var_dump($nome1 != $nome2); // != diferente
var_dump($nome1 !== $nome3); // !== diferença extrita
echo '<br>';



$nome4 = ['idade', '20', 'nome', 'Maria'];
var_dump($nome3 == $nome4); //== IGUAL
echo '<br>';
$nome4 = ['idade', '200', 'nome', 'Maria'];
var_dump($nome3 == $nome4); //== IGUAL
?>
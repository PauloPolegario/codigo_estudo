<div class="titulo">Operações</div>

<?php

$dados1 = [
    "nome" => "José",
    "idade" => 28,
];
$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2['end']="RUA A";// ACRESCENTOU ELEMENTO AO ARRAY

//juntados os arrays
$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);
echo '<br>';
echo is_array($dadosCompletos); //is_array função que identifica se a um array
echo '<br>';
echo count($dadosCompletos); //função count mostra quantos elementos tem no array
echo '<br>';
$indice = array_rand($dadosCompletos); //array_rand — Escolhe um ou mais elementos aleatórios de um array
echo $indice;
echo '<br>';
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}"; //imprime a idade contida em $dadosCompletos
echo '<br>';
unset($dadosCompletos['idade']); //remove um elemento do array
print_r($dadosCompletos);
echo '<br>';

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];
$decimais = $impares + $pares;
print_r($decimais);//so imprime os esquerda os impares
echo '<br>';

$decimais= array_merge($pares,$impares);//funçao array_merge junta os arrays mas de forma desordenada
print_r($decimais);
echo '<br>';

sort($decimais);//sort ordenou o array
print_r($decimais);


?>
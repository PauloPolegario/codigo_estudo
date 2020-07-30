<div class="titulo">Operador Ternário</div>

<?php

$idade = 10;
$status;

if ($idade >= 18) {
    $status = 'Maior de Idade';
} else {
    $status = 'Menor de Idade';
}
echo "$status <br>";

$idade = 107;
$status = $idade >= 18 ? 'Maior de idade!' : 'Menor de idade!';
echo "$status"; //? significa ternário

//$status = $idade >= 18 ? $idade >=65 ?'Maior de idade!'  : 'Menor de idade!';

?>
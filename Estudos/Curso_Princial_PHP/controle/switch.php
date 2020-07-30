<div class="titulo">Switch</div>

<?php

echo"<p class='divisao'>Com if else</p><hr>";
$categoria = 'SUV';
$preco = 0.0;
$carro = '';

if ($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} elseif ($categoria === 'SUV') {
    $carro = 'Renegate';
    $preco = 80000;
} elseif ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}
$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p >Carro: $carro<br> Preço: $precoFormatado<br></p>";

echo"<p class='divisao'>Com switch</p><hr>";

$categoria = 'suv';
switch (mb_strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv':
        $carro = 'Renegate';
        $preco = 80000;
        break;
    case 'suv':
        $carro = 'Renegate';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
}
$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br> Preço: $precoFormatado<br></p>";

?>
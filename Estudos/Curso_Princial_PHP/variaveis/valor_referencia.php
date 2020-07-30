<div class="titulo">Valor e Referência</div>


<?php

$variavel = "um valor qualquer";
echo $variavel.'<br>';

//Atribuição por valor
echo'**Atribuição por valor <br>';
$variavelValor = $variavel;
echo $variavelValor.'<br>';

$variavelValor = 'novo valor';
echo $variavelValor.'<br>';
echo $variavel.'<br>';
echo'**Atribuição por referência <br>';

//Atribuição por referência (&)

$variavelReferência = &$variavel ;
echo $variavelReferência.'<br>';
$variavelReferência = "mesma referência";
echo $variavelReferência.'--'.$variavel;

?>
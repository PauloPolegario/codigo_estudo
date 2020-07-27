<div class="titulo">Variáveis</div>

<?php
$numero=10;
echo $numero,'<br>';
var_dump($numero);
echo'<br>';
$a=3;
$b=16;
$c=14;
$somaNumeros = $a + $b + $c;
echo $somaNumeros;
echo'<br>';
echo isset($somaNumeros);  //isset ceta a variável 'confere se um valor se tiver retorna 1 '  
echo'<br>';
echo isset($variavelSemValor);//retorna vazio
echo'<br>';
unset($somaNumeros); //'zera a variavel '   
echo'<br>';
echo isset($somaNumeros);//zerada
echo'<br>';


$variavel = 10;
echo $variavel;
echo'<br>';

$variavel ='Agora sou uma string!';
echo $variavel;

//nomes de variáveis
$var='valida';
$var2='valida';
$VAR='valida';
$_var_='valida';
//$6var='invalida';
//$%var='invalida';
//$var%2='invalida';

//variáveis pré definida
echo'<br>';
#var_dump($_SERVER); Informação do servidor e ambiente de execução
echo'<br>';
var_dump($_globals);//Referencia todas variáveis disponíveis no escopo global
echo'<br>';
var_dump($_get);
echo'<br>';
var_dump($_post);
echo'<br>';
var_dump($_file);
echo'<br>';
var_dump($_cookie);
echo'<br>';
//https://www.php.net/manual/pt_BR/reserved.variables.php

?>
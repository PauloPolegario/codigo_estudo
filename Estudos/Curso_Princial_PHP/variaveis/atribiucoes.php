<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';
$numero = 10;
echo'<br>'.$numero;
$numero = $numero - 3;
echo'<br>'.$numero;
$numero  =$numero + 1.5;
echo'<br>'.$numero;
echo'<br>';
var_dump($numero);
$numero --;//decrementa uma unidade
echo'<br>'.$numero;
--$numero;//decrementa uma unidade
echo'<br>'.$numero;
$numero ++ ;//incrementa uma unidade
echo'<br>'.$numero;
++$numero;//incrementa uma unidade
echo'<br>'.$numero;
echo'<br>'.$numero = 20;
$numero -= 5;
echo'<br>'.$numero;
$numero += 5;
echo'<br>'.$numero;
$numero /= 5;
echo'<br>'.$numero;
$numero *= 5;
echo'<br>'.$numero;
$numero **= 2;
echo'<br>'.$numero;
$numero %= 3;
echo'<br>'.$numero;
$numero = 3.9;
echo'<br>'.$numero;
$numero .= 3;//apenas concatena
echo'<br>'.$numero;

//com string

$texto = 'Esse é um texto';
echo'<br>' . $texto;
$texto = $texto . ' Qualquer';
echo'<br>'. $texto;
$texto = $texto . ' De verdade!';
echo'<br>'. $texto;

//$variavelInexistente ='valor inexistente';
echo'<br>'.$variavelInexistente;
$valor = $variavelInexistente ?? 'valor default';
echo '<br>'.$valor;


?>
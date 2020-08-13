<div class="titulo">Array</div>

<?php

$lista = array('Paulo',44,1.70,"baixo");
echo $lista;
echo'<br>';
print_r($lista);
echo'<br>';
var_dump($lista);
echo'<br>';
echo $lista[0].' - '. $lista[1].' - '. $lista[2].' - '. $lista[3];
echo'<br>';
echo'<br>'. $lista[0];
echo'<br>'. $lista[1];
echo'<br>'. $lista[2];
echo'<br>'. $lista[3];

$texto="Esse é um texto de teste!";
echo'<br>' . $texto[3];
echo'<br>' . $texto[11];
echo'<br>' . mb_substr($texto,10,5);

echo'<br>' ;
$lista[0] = 'Mario';
echo $lista[0];

?>


<div class="titulo">Array contantes</div>

<?php

const FRUTAS=['Banana','Laranja','Abacaxi'];
print_r(FRUTAS);
echo '<br>'. FRUTAS[0];
//FRUTAS[]='uva'; não aceita a inclução 

const CARROS=['Fiat','Pailo','Fort','Fiesta'];
echo '<br>'.CARROS[1];
echo'<br>';
print_r(CARROS);

define('CIDADES',['Manaus','Porto Velho']);//define — Define uma constante
echo '<br>'.CIDADES[1];
echo'<br>';
print_r(CIDADES);

?>
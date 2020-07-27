<div class="titulo">Desafio variáveis</div>
<?php

$numerador1= 6*(3+2);
$expo1 = 2;
$denominador1=3*2;
$total1 = $numerador1 **$expo1 / $denominador1;
echo $total1;
echo'<br>';

$numerador2= (1-5)*(2-7);
$expo2 = 2;
$denominador2 = 2;
$total2 = ($numerador2  / $denominador2)**$expo2;
echo $total2;
echo'<br>';


$superior= ($total1 - $total2)**3;
//echo $superior;
echo'<br>';
$inferior = 10**3;
//echo $inferior;

$Final = $superior / $inferior;

echo $Final; 


?>
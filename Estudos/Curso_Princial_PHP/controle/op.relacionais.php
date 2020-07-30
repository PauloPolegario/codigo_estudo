<div class="titulo">Op. Relacionais</div>

<?php

var_dump(1==1);
echo'<br>';
var_dump(1 ==='1');
echo'<br>';
var_dump(1>1);
echo'<br>';
var_dump(1>=1);
echo'<br>';
var_dump(4<20);
echo'<br>';
var_dump(4<=20);
echo'<br>';
var_dump(1 != 1);
echo'<br>';

echo"<p class='divisao'>Relacionais no IF/ELSE</p><hr>";


$idade=50;

if ($idade <= 18) {
    echo'A pessoa e menor de idade!';
}else if ( $idade <= 65) {
    echo'A pessoa e maior de idade!';
    
}else {
    echo'A pessoa esta na terceira  idade!';
}

echo"<p class='divisao'>Spaceship</p><hr>";
var_dump(5<=>3);
var_dump(50<=>50);
var_dump(50<=>500);
echo"<p class='divisao'>Valores podem ser V ou F</p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!'');
var_dump(!!'   ');



?>

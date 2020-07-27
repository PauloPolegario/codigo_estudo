<div class="titulo">Conversões</div>

<?php

echo'<br>';
var_dump(PHP_INT_MAX);
echo'<br>';
// int para float
echo"Conversão de int para float";
echo'<br>';
var_dump(PHP_INT_MAX + 1);
echo'<br>';
var_dump(1+1.0);
echo'<br>';
var_dump((float)3);
echo'<br>';

//float para int
echo"Conversão de int para float";
echo'<br>';
var_dump((int)6.8);
echo'<br>';
var_dump(intval(2.999));
echo'<br>';
var_dump((int) round(2.8));

echo'<br>';
//operações com string
echo"String";
echo'<br>';
var_dump(3 +"2");
echo'<br>';
var_dump("3"+ 2);
echo'<br>';
var_dump("3". 2);
echo'<br>';
is_string("3". 2);
echo'<br>';
var_dump( 1 + "5 cinco");
echo'<br>';
var_dump( "5 cinco" + 1);
echo'<br>';
var_dump( 1 + "-32e2");
echo'<br>';
var_dump( (int)"10.5");
echo'<br>';
var_dump( (float)"10.5");
echo'<br>';


?>
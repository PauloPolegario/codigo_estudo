<div class="titulo">OP. Lógicos</div>
<?php
echo "<p class='divisao'> V ou F </p><hr>";
var_dump(true);
echo '<br>';
var_dump(!false); //not

echo "<p class='divisao'>Tabela verdade 'and' (e) </p><hr>";

//com &&
var_dump(true && true); // = true
var_dump(false && true); //= false
var_dump(true && false); //= false
var_dump(FALSE && false); //= false
echo '<BR>';
//com AND
var_dump(true and true); // = true
var_dump(false and true); //= false
var_dump(true and false); //= false
var_dump(FALSE and false); //= false

echo "<p class='divisao'>Tabela verdade 'OR' (ou) </p><br><hr>";

var_dump(true || true); // = true
var_dump(false || true); //= true
var_dump(true || false); //= true
var_dump(FALSE || false); //= false
echo '<br>';
var_dump(true or true); // = true
var_dump(false or true); //= true
var_dump(true or false); //= true
var_dump(FALSE or false); //= false

echo "<p class='divisao'>Tabela verdade 'XOR' (ou exclusivo) </p><br><hr>";

var_dump(true xor true); // = false
var_dump(false xor true); //= true
var_dump(true xor false); //= true
var_dump(FALSE xor false); //= true
echo '<br>';
var_dump(true != true); // = false
var_dump(false != true); //= true
var_dump(true != false); //= true
var_dump(false != false); //= true


echo "<p class='divisao'>Exemplo</p><br><hr>";

$idade = 62;
$sexo = 'F';

if ($idade >= 60 && $sexo === 'F') {
    echo "Pode ser aponsentar -> $sexo";
} else if ($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar.-> $sexo ";
} else {
    echo 'Vai ter que trabalhar mas um pouco...  ';
}




?>
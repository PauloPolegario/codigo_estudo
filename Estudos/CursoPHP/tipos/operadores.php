<div class="titulo">Operadorões aritmétricas</div>

<?php
echo 1 + 1,'<br>';
var_dump(1+1);
echo '<br>';
echo 1+2.5,'<br>';
echo 15 - 2,'<br>';
echo 15*5-10 ,'<br>';
echo 15/5 ,'<br>';
echo intdiv(7,4),'<br>';
echo round(7/4),'<br>';
echo 7 % 4,'<br>';//resto da divição
echo 7 / 0,'<br>';
echo 4 ** 2,'<br>';// ** exponenciação

//Precedência de operadores
// () => ** => / * % => + -

echo'<p>Precedência</p>';
echo 2 + 3 * 4,'<br>';
echo (2 + 3) * 4,'<br>';
echo 2 + 3 * 4 ** 2,'<br>';
echo ((2 + 3) * 4)**2,'<br>';





?>
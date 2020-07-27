<div class="titulo">Tipos Booleano</div>

<?php

echo true;
echo'<br>';
echo false;

echo '<br>'.var_dump(true);
echo '<br>'.var_dump(false);
echo '<br>';
echo '<br>'.var_dump('false');
echo '<br>'.var_dump('true');
echo '<br>'.is_bool(false);
echo '<br>'.is_bool(true);
echo '<br>'.is_bool('true');

//fazer as regras de conversões

echo'<p>Regras</p>';
echo '<br>'.var_dump((bool)0);//apenas zero é false
echo '<br>'.var_dump((bool)10);
echo '<br>'.var_dump((bool)-10);
echo '<br>'.var_dump((bool)0.0);
echo '<br>'.var_dump((bool)0.01);
echo '<br>'.var_dump((bool)" ");
echo '<br>'.var_dump((bool)"0");
echo '<br>'.var_dump(!"false");
echo '<br>'.var_dump(!!"false");
echo '<br>'.var_dump((int)0);
echo '<br>'.var_dump((string)0);



?>
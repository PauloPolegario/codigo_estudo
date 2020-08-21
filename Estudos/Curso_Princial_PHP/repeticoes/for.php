<div class="titulo">Laço For</div>


<?php

echo 'Sintace FOR for (expr1; expr2; expr3){}';

for ($i = 0; $i < 0; $i++) {
    # code...
};
echo "<br>";


for ($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for (; $cont <= 10; $cont++) {
    echo "$cont<br>";
}

echo "<hr>";

for (; $cont <= 15;) {
    echo "$cont <br>";
    $cont++;
}

echo'<hr>';

$array=['Domingo','Segunda' ,'Terça','Quarta'
,'Quinta','Sexta','Sábado'];

for ($i=0; $i < count($array); $i++) { 
    echo"{$array[$i]}<br>";
}
echo'<hr>';

$matrix = [
    ['A','B','C','D','E','F','G'],
    [' h ' ,' i ' ,' j ',' l ',' m ',' n ',' o '],
];

for ($i=0; $i < count($matrix) ; $i++) { 
    for ($j=0; $j < count($matrix[$i]) ; $j++) { 
       echo "{$matrix[$i]  [$j]}";
    }
    echo'<br>';
}



?>
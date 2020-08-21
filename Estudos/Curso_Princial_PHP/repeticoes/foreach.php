<div class="titulo">Foreach</div>


<?php


$array = [
    'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'
];

foreach ($array as $valor) {
    echo " $valor <br>";
}
echo '<br>';
echo '<br>';

foreach ($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}
//var_dump($indice)
echo '<br>';

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];



foreach ($matrix as $linha) {
    //echo '$linhas';

    foreach ($linha as $valor) {
        echo" $valor ";
    }
    echo "<br>";
}

$numeros=[1,2,3,4,5,6,7,8,9];

foreach ($numeros as &$dobrar){//& pega o o endereço da variavél
    $dobrar *= 2;
    echo "$dobrar - ";
}


?>



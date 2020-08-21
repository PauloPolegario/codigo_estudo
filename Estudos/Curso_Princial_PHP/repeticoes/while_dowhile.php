<div class="titulo">While dowhile</div>


<?php

const VALOR_LIMITE = 5;
$contador = 0;

while ($contador < VALOR_LIMITE) {
    echo "Exemoplo While $contador<br>";
    $contador++;
}

echo "<br>";

do {
    echo "Exemoplo doWhile $contador<br>";
    $contador++;
} while ($contador < VALOR_LIMITE);


echo "<br>";

$contador = 0;
while (true) {
    echo "Exemoplo doWhile $contador<br>";
    $contador++;
    if ($contador >= VALOR_LIMITE) {
        break;
    }
}

echo "<br>";
?>
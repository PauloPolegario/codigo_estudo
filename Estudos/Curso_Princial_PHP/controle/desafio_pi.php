<div class="titulo">Desafio PI</div>

<?php

echo pi()."<br>";
$pi = 3.14;
echo $pi."<br>";

if ($pi != pi()) {
    echo 'Iguais!!';
} else {
    echo 'Diferentes!!';
}


?>
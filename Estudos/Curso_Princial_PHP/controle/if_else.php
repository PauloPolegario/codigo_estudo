<div class="titulo">If e Else</div>

<?php

if (true) {
    echo'Sou verdadeiro! <br>';
}
if (1) {//1 verdadeiro 0 falso
    echo'Sou verdadeiro! <br>';
}

if(false){// se for false imprima sou falso
    echo'Sou verdadeiro! <br>';
}else {
    echo'Sou Falso! <br>';
}

if(false){// se for false imprima sou falso
    echo'Sou verdadeiro - Parte 1! <br>';
    echo'Sou verdadeiro - Parte 2! <br>';
}else {
    echo'Sou Falso - Parte 1! <br>';
    echo'Sou Falso - Parte 2! <br>';
}

if(false){// se for false imprima sou falso
    echo'Parte 01! <br>';
}else if (true) {
    echo'Parte 02! <br>';
}else {
    echo'Parte 03! <br>';
}

?>
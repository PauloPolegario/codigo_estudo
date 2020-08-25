<div class="titulo"> Funções & Escopo </div>


<?php

function imprimirMensagem()
{
    echo "Ola ";
    echo "Até a próxima ok!!";
}
imprimirMensagem();
/* imprimirMensagem(); */
/* imprimirMensagem(); */

echo "<br>";

$variavel = 1; //variável externa

function trocarValor()
{
    $variavel = 2; //variável interna
    echo "Durante a função : $variavel <br>";
}

echo "Antes : $variavel<br>";
trocarValor();
echo "Depois da: $variavel<br>";

echo "<hr>";

function trocarValordeVerdade()
{
    global $variavel; //global altera o valor da variável
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes da funação: : $variavel<br>";
trocarValordeVerdade();
echo "Depois da função: $variavel<br>";

echo"<hr>";

var_dump(trocarValordeVerdade());
?>
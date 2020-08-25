<div class="titulo">Argumentos e Retornos</div>


<?php

function obterMensagem(){//sem parametros
    return'Seja bem vindo!!';//com retorno 
}

echo obterMensagem();
$mensagem = obterMensagem();
echo "<br> $mensagem ";
echo "<br>";
var_dump(obterMensagem());

echo"<hr>";

function obterNome($nome){//com parametro
    return "Seja bem vindo: :{$nome}!!";//com retorno
}
echo"<br>", obterNome('Paulo');

echo"<hr>";

function soma($a,$b){//com parametros
    return $a + $b; //com tetorno
}
echo"<br>",soma(10,58);//resultado

$n=100;//variáveis internas
$m=512;
echo"<br>",soma($n,$m);//resultado

echo"<hr>";


    function trocaValor($a, $novoValor){
        $a=$novoValor;
    }
    $variavel = 1;
    trocaValor($variavel,3);
    echo"<br> $variavel";// permanece o valor da variável 1;

    echo"<hr>";


    function trocaValorVerdade (&$a, $novoValor){//&
        $a=$novoValor;
    }
    $variavel = 1;
    trocaValorVerdade($variavel,5000);//foi usado a referência 5000
    echo"<br> $variavel";// não permaneceu o valor da variável 1;










?>
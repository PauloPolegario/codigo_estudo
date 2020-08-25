<div class="titulo">Palíndromo</div>

<?php


function palindromo($nome)
{

    $a = $nome;
    if ($a == strrev($a)) {
        echo "Sim - $a ";
    } else {
        echo "Não - $a ";
    }
}

echo palindromo("arara") . '<br> ';
echo palindromo("ana") . '<br> ';
echo palindromo("abccba") . '<br> ';
echo palindromo("bola") . '<br> ';

echo "<hr>";

function palindromo2($palavra)
{
    return $palavra === strrev($palavra) ? 'Sim ' : 'não';
}

echo palindromo2("arara") . '<br> ';
echo palindromo2("ana") . '<br> ';
echo palindromo2("abccba") . '<br> ';
echo palindromo2("bola") . '<br> ';
/* Ele funciona como um if. Ele testa
uma condição (o primeiro operando), se
ela for verdadeira, o resultado da 
operação é o primeiro valor (após o ? , o
segundo operando), se ela for falsa, então
o resultado é o segundo valor (depois do :, o
terceiro operando). */

echo"<hr>";

function palindromo3($palavra){
    $ultimaIndice=strlen($palavra) - 1;
   
    for ($i=0; $i <=$ultimaIndice ; $i++) { 
       
        if ($palavra[$i] !== $palavra[$ultimaIndice - $i]) { 
            return'não';
        }
    }
    return'sim';

};

echo palindromo3("arara") . '<br> ';
echo palindromo3("ana") . '<br> ';
echo palindromo3("abccba") . '<br> ';
echo palindromo3("bola") . '<br> ';


?>
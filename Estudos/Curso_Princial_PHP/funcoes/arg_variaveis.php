<div class="titulo">Argumentos Variávies</div>

<?php

function soma($a, $b) {
    return $a + $b;
}
echo soma(7,3).'<br>';

echo '<hr>';

//função que soma vários números
function somaCompleta (...$numeros){// ... os tres pontos coloca os argumentos em array
    //print_r($numeros);
    $soma=0;
    foreach ($numeros as $numeros) {//percorre os argumentos no caso somando os números
        $soma += $numeros;//atribuição aditiva
    }
    return $soma;
}
echo somaCompleta(1,2,3,4,5,6);

echo '<hr>';

function menbros($titular, ...$depententes){//... cria um array de dependentes
    echo "Titular: $titular<br>";
   
    if($depententes){// si tem depententes
        foreach($depententes as $depententes){// percorre o array
            echo "Dependentes: $depententes<br>";
        }
    }

}
menbros(" Paulo " ," Mário " ," Miguel " ," Janaina");
echo"<br>";
menbros(" Marcos ");
?>
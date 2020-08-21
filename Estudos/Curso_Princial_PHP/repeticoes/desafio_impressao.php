<div class="titulo">Desafio Impressão </div>



<?php

$array=[
    "aaa",
    "bbb",
    "ccc",
    "ddd",
    "eee",
    "fff",
];

/* foreach ($array as  $valor) {
    if($valor % 2 == 0)
    echo"$valor";
} */
var_dump($chave);
var_dump($valor);

foreach ($array as $chave => $valor) {
    if ($chave % 2 !== 0) continue; {
        echo"$chave <br>";
        echo"$valor <br>";
    }
}
    var_dump($chave);
    var_dump($valor);

echo" <br>";

for ($i=0; $i <count($array) ; $i++) { 
   if ($i % 2===1)continue; {
       echo"{$array[$i]} <br>";
   }
}    

?>



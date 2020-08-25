<div class="titulo">Função anônimas</div>

<?php

$soma = function ($a, $b) {//variável que recebe uma função
    return $a + $b;
};
 echo $soma(1,6).'<br>'; 
 
 echo'<hr>';



 function executar($a,$b,$op,$funcao){
     $resultado = $funcao($a,$b);
     echo "$a $op $b = $resultado<br>";
 }

 executar(2,3,'+',$soma);




 $multiplicao =  function($a,$b){
     return $a*$b;
 };

 executar(2,3,'*',$multiplicao);

?>
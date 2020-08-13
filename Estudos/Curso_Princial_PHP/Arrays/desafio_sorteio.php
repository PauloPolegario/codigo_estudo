<div class="titulo">Desafio Sorteio</div>

<?php

$nomes=['Paulo','Miguel','Mario','Jorge','Jussara'];
$vencedor = array_rand($nomes); 
echo'<h1>O vencedor(a) foi:</h1>'." $nomes[$vencedor]";
echo'<br>';
echo "<h1 div center>$nomes[$vencedor]</h1>"

?>

<style>
    [center]{
        display:flex;
        justify-content: center;
    }
</style>
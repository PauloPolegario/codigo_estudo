<div class="titulo">Usando variáveis</div>

<?php

function soma($a, $b)
{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo soma(1,6).'<br>';
echo soma(1.6 , 2.9).'<br>';
echo soma(5,'8oito').'<br>';

echo'<hr>';

function soma2(int $a, int $b)//int em variaveis
{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo soma2(1,6).'<br>';
echo soma2(1.6 , 2.9).'<br>';
echo soma2(5,'8oito').'<br>';

echo'<hr>';

function soma3($a, float $b): int //:int faz a converção no final
{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo soma3(1,6).'<br>';
echo soma3(1.6 , 2.9).'<br>';
echo soma3(5,'8oito').'<br>';

?>
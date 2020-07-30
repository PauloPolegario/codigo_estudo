<div class="titulo">Desafio Operadores Lógicos</div>

<!--
     Dois trabalhos -> Terça e Quinta!
        - Se os dois trabalhos forem executados -> tv 50' e sorvete.
        - Se apenas um for executado -> tv 32' e sorvete
        - Se nenhum for executado -> Fica em casa e mais saudável!
 -->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1(Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2(Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<?php
/* var_dump('t1');
var_dump('t2');
echo $_POST['t1'];
echo $_POST['t2']; */

/* if ($_POST['t1']) {
    if ( $_POST['t1'] && $_POST['t2'] ) {
        echo'Vamos comprar uma tv de 50P e vai ter sorvete';
    } elseif ($_POST['t1'] || $_POST['t2']) {
        echo'Vamos comprar uma tv de 32P e vai ter sorvete';
    }else {
        echo'Deu RUIM nada de sorvete e tv :-(!';
    } 
    
} */

if ($_POST['t1']) {


    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

    if ($t1 && $t2) {
        $tv = '50"';
    } elseif ($t1 xor $t2) {
        $tv = '32"';
    }

    if ($t1 or $t2) {
        $sorvete = true;
    }

    if ($tv) {
        $resultado = "Vamos comprar uma TV de $tv";
    } else {
        $resultado = "Sem tv dess vez!";
    }

    $saudavel = !$sorvete;

    if ($saudavel) {
        $resultado .= '<br Estamos mais saudáveis>';
    } else {
        $resultado .= '<br> Sorvete Liberado';
    }
}
echo "<p>$resultado</p>"



?>



<style>
    button,
    select {
        font-size: 1.8rem;
    }
</style>
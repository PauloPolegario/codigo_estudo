<div class="titulo">Desfafio tabela 01 </div>


<?php
$matriz = [
    ['1', '2', '3', '4', '5',],
    ['6', '7', '8', '9', '10',],
    ['11', '12', '13', '14', '15',],
];

foreach ($matriz as $linhas) {
    foreach ($linhas as $valor) {
        echo " $valor ";
    }
    echo "<br>";
}

?>


<table>

    <?php
    foreach ($matriz as $linhas) {
        echo "<tr>";
        foreach ($linhas as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

<table>

    <?php
    foreach ($matriz as $index => $linhas) {
        $style = $index % 2 === 0 ?
            'background-color: red;' : '';
        echo "<tr style = '{$style}'>";
        foreach ($linhas as $valor) {
            echo "<td>$valor</td>";
        }
        echo '</tr>';
    }
    ?>

</table>

<table>

    <?php
    foreach ($matriz as $index => $linhas) {
        $style = '';
        if ($index % 2 === 0) {
            'background-color: red;';
            //$style = $index;
            echo "<tr style = '{$style}'>";
        }
        foreach ($linhas as $valor) {
            echo "<td>$valor</td>";
        }
        echo '</tr>';
    }
    ?>

</table>





<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
        width: 467;
    }

    table tr {
        border: 1px solid #444;

    }

    table td {
        padding: 10px 20px;
    }
</style>
<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="parametro">
    <select name="conversao" id="conversao">
        <option value="Km-Milha">Km para Milha</option>
        <option value="Milha-Km">Milha para KM</option>
        <option value="Metro-Km">Metro para Km</option>
        <option value="Km-Metro">Km para Metro</option>
        <option value="Farh-Cel">Farhrenheit para Celsius</option>
        <option value="Cel-Farh">Celsius para Farhrenheit</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>

<?php
/* echo $_POST['parametro'] . '<br>';
echo $_POST['conversao'];

$valorParametro = $_POST['parametro'];
$convertido = $_POST['conversao'];
echo $valorParametro;
echo $convertido;
 */

const KM_MILHA = 1.609;
const KM_METRO = 1000;
$valorParametro = $_POST['parametro'];


switch ($_POST['conversao']) {
    case 'Km-Milha':
        $distancia = $valorParametro * KM_MILHA;
        $mensagem = "$valorParametro KM = $distancia MILHAS";
        break;
    case 'Milha-Km':
        $distancia = $valorParametro / KM_MILHA;
        $mensagem = "$valorParametro MILHAS = $distancia KM";
        break;
    case 'Metro-Km':
        $distancia = $valorParametro * KM_METRO;
        $mensagem = "$valorParametro METROS = $distancia KM";
        break;
    case 'Km-Metro':
        $distancia = $valorParametro / KM_METRO;
        $mensagem = "$valorParametro KM = $distancia METROS";
        break;
    case 'Farh-Cel':
        $temperatura = ($valorParametro - 32) * 5 / 9;
        $mensagem = "$valorParametro Farh = $temperatura Cel";
        break;
    case 'Cel-Farh':
        $temperatura = ($valorParametro *9/5)+ 32;
        $mensagem = "$valorParametro Cel = $temperatura Farh";
        break;

    default:
        $mensagem = "Nenhum valor calculado!";
}
echo "<p>$mensagem</p>";
?>
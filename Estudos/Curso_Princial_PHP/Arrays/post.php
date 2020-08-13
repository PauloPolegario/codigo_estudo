<div class="titulo">$_POST</div>


<form action="#" method="post">
    Nome: <input type="text" name="nome">
    <br>
    Sobrenome: <input type="text" name="sobrenome">
    <br>
    Estado: <select name="estado" id="">
        <option value="RJ">Rio J</option>
        <option value="MG">Minas G</option>
        <option value="ES">Espírito S</option>
        <option value="SP">S Paulo</option>
    </select>
    <br>
    <button>Enviar</button>

</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>

<?
echo $_GET;
echo'<br>';
print_r($_POST);
echo'<br>';
echo count($_POST);

?>
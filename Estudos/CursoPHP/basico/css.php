<div class="titulo">Integração css & php</div>

<h1 center>
<?php 
echo('olá');
echo('<small>');
echo(' mundo');
echo('</small>');
?>
</h1>

<?= "<div center azul>outra forma de me 'expressar'!</div>" ?>

<div><button dobro> <?="legal"?> </button></div>

<style>
    button{
        padding:  5px <?=2*10?>px;
        background-color: blue;
        color: #eee;
        font-weight: bold;
        border-radius: 10px;
    }
    [center]{display: flex; justify-content: center;}
    [azul]{color: blue;}
    [dobro]{font-size: 2.1rem;}

</style>
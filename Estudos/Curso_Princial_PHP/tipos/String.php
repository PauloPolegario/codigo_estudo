<div class="titulo">String</div>

<?php
echo('Um string é simplesmente um grupo de caracteres entre aspas.');
echo('<br>');
var_dump("Eu também");
echo('<br>');

//Concatenação
echo("Concatenação no php e feito pelo ponto (.) ");
echo('<br>');
echo("Nos também"." somos.");
echo '<br>',"Também aceito"," virgulas.";
echo('<br>');
echo "´Teste´ ".' "Teste"'." /Teste/ ", "\\" ;
echo('<br>');
print("Também existe a função print para imprimir na tela!
Com ou sem ()");
echo('<br>');
//Algumas funções
print("Algumas funções");
echo('<br>');
echo strtoupper('Essa função maximiza o texto!(strtoupper)');
echo('<br>');
echo strtolower('Essa função minimiza o texto!(strtolower)');
echo('<br>');
echo ucfirst("só a primeira letra da palavra ");
echo('<br>');
echo ucwords("todas as primeira letra da palavra ");
echo('<br>');
echo strlen ("Quantas letras?");
echo("<br>");
echo mb_strlen("Eu também","utf-8");
echo("<br>");
echo substr("Só uma parte mesmo",7,6);
echo("<br>");
echo str_replace('isso','aquilo','Trocar isso ');

?>
<div class="titulo">Argumento Padrão</div>

<?php

function saudacao($nome='Senhor',$sonbrenome='cliente'){
    //echo "Bem vindo Senhor: $nome $sonbrenome !<br>";
    return "Bem vindo Senhor: $nome $sonbrenome !<br>";
}
echo saudacao("Paulo" ," Cesar");
//saudacao(null,null);

echo"<hr>";

function anotarpedido($comida, $sobremeca, $bebida ='Àgua'){//argumento padrao
    echo "Para comer $comida <br>";
    echo "Para sobremeça $sobremeca <br>";
    echo "Para beber $bebida <br>";
}

anotarpedido('Peixe','manga','suco');// mas pode ser modificado

?>
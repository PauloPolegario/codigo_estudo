<div class="titulo">Mapas</div>

<?php

$dados=array("idade" => 44,//chave + valor
"sexo"=>"masculino",
"altura"=>1.79,
"cor"=>"moreno"
);
print_r($dados);
echo'<br>';

echo $dados["idade"];
echo'<br>';
echo $dados["sexo"];
echo'<br>';
echo $dados["altura"];
echo'<br>';

var_dump($dados[0]);
?>
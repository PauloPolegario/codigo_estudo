<div class="titulo">Arrays Multidirecionais</div>

<?php

$dados = [
    [
        "nome" => "Paulo",
        "idade" => 44,
        "naturalidade" => "Rio de janeiro",
    ],
    [
        "nome" => "janáina",
        "idade" => 46,
        "naturalidade" => "Espiríto Santo",
    ],
    [
        "nome" => "Miguel",
        "idade" => 19,
        "naturalidade" => "Minas Gerais",
    ]

];

print_r($dados[0]);
echo "<br>";
print_r($dados[1]);
echo "<br>";
print_r($dados[2]);
echo "<br>";
print_r($dados[0]['nome']);
echo "<br>";

//acrescentando mais dados ao array
$dados[] = [
    "nome" => "Jorge",
    "idade" => 76,
    "naturalidade" => "Acre",
];

print_r($dados);

//acrescentando atributos aos dados
echo'<br>';
$dados[3]["Casado"]="Jussara" ;
print_r($dados[3]);
echo "<br>";

//removendo chaves 
unset($dados[1]);
print_r($dados);
?>
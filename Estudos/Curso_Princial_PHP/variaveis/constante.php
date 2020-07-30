<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
ECHO TAXA_DE_JUROS.'<BR>';
echo constant('TAXA_DE_JUROS <br>');

const NOVA_TAXA = 2.5;
echo NOVA_TAXA.'<BR>';

$valorVariavel = 2.8;

 //certo define( 'NOVISSIMA_TAXA' , $valorVariavel);
 //errado const NOVISSIMA_TAXA = $valorVariavel;
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo NOVISSIMA_TAXA.'<br>'; 
echo'<br>' . PHP_VERSION; 
echo'<br>' . PHP_INT_MAX;
echo'<br>' . PHP_OS;  
echo'<br>' .PHP_URL_HOST;
echo'<br>' . __FILE__;
echo'<br>' .__DIR__;
echo'<br>' .__CLASS__;


?>
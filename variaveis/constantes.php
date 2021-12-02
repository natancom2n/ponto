<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;

$valoVar = 2.8;
define(NOVISSIMA_TAXA, $valoVar);
echo "<br>" . NOVISSIMA_TAXA;

//PARA ADICIONAR OPERACOES ARITIMÉTICAS EM UMA CONSTANTE DEVE SER USADO 
// O CONST

const NOVISSIMA_TAXA2 = 2 + 2;
echo "<br>" . NOVISSIMA_TAXA2;


echo "<br> const para versão do php: " . PHP_VERSION;
echo "<br> const para número da linha: " . __LINE__;
echo "<br><br> nome do arquivo que estamos: <br> " . __FILE__;
echo "<br><br> nome do diretorio que estamos: <br> " . __DIR__;



<div class="titulo">Valor vs Referencia</div>

<?php

echo "Atribuicao por valor:<br><br>";

$var = 'valor inicial';
echo $var;

$varValor = $var;
echo "<br> variavel varValor == $varValor";
$varValor = 'novo Valor';

echo "<br> var == $val e varValor == $varValor";

echo "<br>Atribuicao por Referencia:<br>";

$varReferencia = &$var;
$varReferencia = "Mesmo Valor";

echo    "<br> varReferencia == $varReferencia , var == $var";

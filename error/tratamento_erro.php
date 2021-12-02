<div class="titulo">Tratamento de Erro</div>

<?php

try{
    echo intdiv(7,0);
    //Error usado para casos mais complicados (mais fatal)
} catch(Error $e) { 
    echo 'Teve um erro 1<br>';
} 

//Exception como se fosse um aviso
try{
    throw new Exception('Um erro muito estranho aconteceu');
        echo intdiv(7,0);
} catch (DivisionByZeroError $e){
    echo 'Divisao por zero'; 
} catch (Throwable $e){
    echo 'Erro Encontrado: ' . $e->getMessage() . '<br>';
}
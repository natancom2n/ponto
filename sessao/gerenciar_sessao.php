<div class="titulo">Gerenciando Sessao</div>
<?php

session_start();
echo session_id();
 
$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'] . '<br>';

if ($_SESSION['contador'] %5 === 0){
    session_regenerate_id();
}

if ($_SESSION['contador'] >= 15){
    session_destroy();
}

<?php
session_start(); 
session_destroy();

//quando encontrar a linha irá modifica na url Location para a pagina
header('Location: basico_sessao.php');


?>
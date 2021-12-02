<?php 

session_start();
print_r($_SESSION);
?>
<?php

$_SESSION['email'] = 'natan@gmail.romba.org';

?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome']?>
</p>
<p>
    <b>E-mail: </b><?= $_SESSION['email'] ?>
</p>

<p>
    <a href="/sessao/basico_sessao.php" >Voltar</a>
</p>
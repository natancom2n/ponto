<div class="titulo">Básico Sessão</div>

<?php
session_start();

print_r($_SESSION);

if (!$_SESSION['nome']){
    $_SESSION['nome'] = 'Natan'; 
}
 
if (!$_SESSION['email']){
    $_SESSION['email'] = 'natancom2n@gmail.com'; 
}
print_r($_SESSION);
?>

<p>
    <a href="/sessao/basico_sessao_alterar.php" class=""> Alterar sessao</a>
</p>
<p>
    <a href="/sessao/basico_sessao_limpar.php" class=""> Limpar sessao</a>
</p>


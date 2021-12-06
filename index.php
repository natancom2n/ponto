<?php
    session_start();

    //verificando se a sessão está logada:
    if (!$_SESSION['usuario']){
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">
    <title>Portifolio PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Portifolio PHP</h1>
        <h2>Indice Portifolio</h2>
    </header>

    <!--- Modificação feita por causa do Login --->
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href="logout.php">Sair</a>
    </nav>
<!--- Modificação feita por causa do Login --->
    <main class="principal">
        <div class="conteudo">
            <?php require_once('menu.php'); ?>
        </div>
    </main>

    <footer class="rodape">
        NATAN ALVES -- <?= date('Y') ?>
    </footer>
</body> 
</html>
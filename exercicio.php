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
<link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Exercícios</title>
</head>
<body class="exercicio"> 
    <header class="cabecalho">
        <h1>Portifolio PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>

    <nav class="navegacao">
    <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href= <?= "{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Sem Formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
        <a href="logout.php">Sair</a>
    </nav>

    <main class="principal">
        <div class="conteudo">

            <?php
               // include($_GET['dir'] .  "/" . $_GET['file'] . ".php");
               include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")
            ?>

        </div>
    </main>

    <footer class="rodape">
        NATAN ALVES -- <?= date('Y') ?>
    </footer>
</body> 
</html>
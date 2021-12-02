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
<body class="login">
    <header class="cabecalho">
        <h1>Portifolio PHP</h1>
        <h2>Seja bem vindo!</h2>
    </header>

<!--- Modificação feita por causa do Login --->
    <main class="principal">
        <div class="conteudo">
            <h3>Identifiqui-se</h3>

            <?php 
                //informado dados errados, tudo que estiver entre if e endif só será apresentado
                //se entrar no if 
                if($_SESSION['erros']): ?>
                <div class="erros">
                    <?php foreach($_SESSION['erros'] as $erro): ?>

                    <?php endforeach ?>
                </div>    

            <?php endif ?>
        </div>
    </main>

    <footer class="rodape">
        NATAN ALVES -- <?= date('Y') ?>
    </footer>
</body> 
</html>
<?php 
    ///logica para login
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($_POST['email']){
   
        //criar array como se fosse o banco de dados dos usuários
        $usuarios = [ 
            [
                "nome" => "Natan Alves",
                "email" => "natan@natan.com.br",
                "senha" => "12345",
            ],
            [
                "nome" => "Aline Barros",
                "email" => "aline@aline.com.br",
                "senha" => "1234",
            ],
        ];

        foreach($usuarios as $usuario) {
        
            $emailValido = $email === $usuario['email'];
            $senhaValida = $senha === $usuario['senha'];
            if ($emailValido && $senhaValida) {
                //limpar os erros 
                $_SESSION['erros'] = null;
                $_SESSION['usuario'] = $usuario['nome'];
                //encaminhar para a pagina index
                header('Location: index.php');
            }
        }
        if(!$_SESSION['usuario']){
         
            $_SESSION['erros'] = ['usuario ou senha inválidos!'];
        }
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
<link rel="stylesheet" href="assets/css/login.css">
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
            
            <?php if ($_SESSION['erros']): ?>
                <?php foreach ($_SESSION['erros'] as $erro): ?>
                    <p><?= $erro ?></p>
                <?php endforeach ?>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name='email' id='email'>
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>

    <footer class="rodape">
        NATAN ALVES -- <?= date('Y') ?>
    </footer>
</body> 
</html>


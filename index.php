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
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=html">Intergração HTML</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=css">Intergração CSS</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo 02</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Inteiros</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=float">Float em php</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=operacoes">Operações Aritiméticas</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>

    <footer class="rodape">
        NATAN ALVES -- <?= date('Y') ?>
    </footer>
</body> 
</html>
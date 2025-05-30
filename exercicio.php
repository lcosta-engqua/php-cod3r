<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets\css\estilo.css">
        <link rel="stylesheet" href="assets\css\exercicio.css">

        <title>Ecercício</title>
    </head>
    <body class="exercicio">
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Visualização do Exercício</h2>
        </header>
        <nav class="navegacao">
            <a href="#" class="verde">Sem formatação</a>
            <a href="index.php" class="vermelho">Voltar</a>
        </nav>
        <main class="principal">
            <div class="conteudo">
                <nav class="modulos">
                    <?php
                        //http://localhost/exercicio.php
                        // include("teste/teste.php");

                        //http://localhost/exercicio.php?dir=teste
                        // include($_GET['dir'] . "/teste.php");

                        //http://localhost/exercicio.php?dir=teste&file=teste
                        // include($_GET['dir'] . "/" .  $_GET['file'] . ".php");

                        // include("{$_GET['dir']}/{$_GET['file']}.php");
                        include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                    ?>
                </nav>
            </div>
        </main>
        <footer class="rodape">
            COD3R & ALUNOS © <?= date('Y'); ?>
        </footer>
    </body>
</html>
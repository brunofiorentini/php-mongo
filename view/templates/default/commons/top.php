<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CRUD - PHP/MongoDB</title>
        <!-- Bootstrap -->
        <link href="./view/css/bootstrap.min.css" rel="stylesheet">
        <link href="./view/css/bootstrap-responsive.min.css" rel="stylesheet">
    </head>

    <body>

        <div class="container">

            <!-- <h1>CRUD - PHP/MongoDB</h1> -->

            <div class="btn-group">
                <a href='index.php'>
                    <button type="button" class="btn btn-default">Home</button>
                </a>
                <a href='index.php?class=Person&function=Create'>
                    <button type="button" class="btn btn-default">Adicionar</button>
                </a>
                <a href='index.php?class=Person&function=Delete'>
                    <button type="button" class="btn btn-default">Deletar</button>
                </a>
                <a href='index.php?class=Person&function=Update'>
                    <button type="button" class="btn btn-default">Editar</button>
                </a>
                <a href='index.php?class=Person&function=Read'>
                    <button type="button" class="btn btn-default">Listar</button>
                </a>
                <a href='index.php?class=Account&function=create'>
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </a>
            </div>

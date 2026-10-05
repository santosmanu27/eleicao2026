<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Comprovante de Votação</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="container">

        <h1>Comprovante de Votação</h1>

        <h2>Seus votos computados:</h2>

        <div class="comprovante">

            <p>
                <strong>Deputado Estadual</strong><br>
                Nº <?php echo $_SESSION["deputado_estadual"]; ?>
            </p>

            <p>
                <strong>Deputado Federal</strong><br>
                Nº <?php echo $_SESSION["deputado_federal"]; ?>
            </p>

            <p>
                <strong>1º Senador</strong><br>
                Nº <?php echo $_SESSION["senador1"]; ?>
            </p>

            <p>
                <strong>2º Senador</strong><br>
                Nº <?php echo $_SESSION["senador2"]; ?>
            </p>

            <p>
                <strong>Governador</strong><br>
                Nº <?php echo $_SESSION["governador"]; ?>
            </p>

            <p>
                <strong>Presidente</strong><br>
                Nº <?php echo $_SESSION["presidente"]; ?>
            </p>

            <a href="index.php" class="botao">
                VOLTAR AO INICIO
            </a>

        </div>

    </div>

</body>
</html>
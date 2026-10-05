<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION["senador1"] = $_POST["numero"];

    header("Location: senador2.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>1º Senador</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="container">

        <h1>1º Senador</h1>

        <p>Digite o número do candidato:</p>

        <form method="POST">

            <input
                type="number"
                name="numero"
                placeholder="000"
                required
            
            <br><br>

            <button type="submit">
                CONFIRMAR VOTO
            </button>

        </form>

    </div>

</body>
</html>
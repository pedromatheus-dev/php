<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
    $numero = $_POST["numero"];
    $antecessor = $numero - 1;
    $sucessor = $numero + 1;
    echo "<p>O antecessor de $numero é $antecessor</p>";
    echo "<p>O sucessor de $numero é $sucessor</p>";
    ?>
    <p><a href="./index.html">Voltar</a></p>
</body>
</html>


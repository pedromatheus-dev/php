<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando...</title>
</head>
<body>
    <h1>Analisando...</h1>
    <?php
        $numero = $_POST["numero"];
        $inteiro = floor($numero);
        $decimal = $numero - $inteiro;
        echo "<p>Parte inteira: $inteiro</p>";
        echo "<p>Parte decimal: $decimal</p>";
    ?>
    <a href="./index.html">Voltar</a>
</body>
</html>
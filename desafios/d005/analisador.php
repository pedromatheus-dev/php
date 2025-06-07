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
        $numero = $_POST["numero"] ?? 0;
        $inteiro = floor($numero);
        $decimal = $numero - $inteiro;
        $numero = number_format($numero, 3, ",", ".");
        $inteiro = number_format($inteiro, 0, ",", ".");
        $decimal = number_format($decimal, 3, ",", ".");

        echo "<p>Analisando número: $numero</p>";
        echo "<ul><li>Parte inteira: $inteiro</li><li>Parte decimal: $decimal</li></ul>";
    ?>
    <a href="./index.html">Voltar</a>
</body>
</html>
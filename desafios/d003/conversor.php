<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão 1.0</title>
</head>
<body>
    <h1>Conversão 1.0</h1>
    <?php
        
        $real = $_POST["real"];
        $real = str_replace(",", ".", $real);
        $dolar = $real * 5.63;
        echo "<p>Valor a converter: R\$$real.";
        echo "<p>Valor convertido: US\$$dolar dólares.</p>";
        echo "<p>*Considerando a cotação: US\$1,00 > R\$5,63.</p>";
    ?>
    <a href="./index.html">Voltar</a>
</body>
</html>
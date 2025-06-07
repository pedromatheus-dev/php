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
        
        $cotacao = 5.63;
        
        $real = $_POST["real"] ?? 0;
        // $real = (float) str_replace(",", ".", $real);
        $dolar = $real / $cotacao;
        // internacionalização de moedas
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $real = numfmt_format_currency($padrao, $real, "BRL");
        $dolar = numfmt_format_currency($padrao, $dolar, "USD");
        // number format
        // $real = number_format($real, 2, ",", ".");
        // $dolar = number_format($dolar, 2, ",", ".");
        echo "<p>Valor a converter: $real.";
        echo "<p>Valor convertido: $dolar dólares.</p>";
        echo "<p>*Considerando a cotação: US\$1,00 = R\$5,63.</p>";
    ?>
    <a href="./index.html">Voltar</a>
</body>
</html>
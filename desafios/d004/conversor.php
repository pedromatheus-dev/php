<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão 2.0</title>
</head>
<body>
    <h1>Conversão 2.0</h1>
    <?php
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';

        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        
        $real = $_POST["real"] ?? 0;
        // $real = (float) str_replace(",", ".", $real);
        $dolar = $real / $cotacao;
        // internacionalização de moedas
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $real = numfmt_format_currency($padrao, $real, "BRL");
        $dolar = numfmt_format_currency($padrao, $dolar, "USD");
        $cotacao = numfmt_format_currency($padrao, $cotacao, "BRL");
        // number format
        // $real = number_format($real, 2, ",", ".");
        // $dolar = number_format($dolar, 2, ",", ".");
        echo "<p>Valor a converter: $real.";
        echo "<p>Valor convertido: $dolar dólares.</p>";
        echo "<p>*Considerando a cotação: US\$1,00 = $cotacao.</p>";
    ?>
    <p>Cotação extraída diretamente do <a href="htttps://www.bcb.gov.br/">Banco Central do Brasil</a></p>";

    <a href="./index.html">Voltar</a>
</body>
</html>
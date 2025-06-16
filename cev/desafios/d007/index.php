<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando o salário</title>
</head>
<body>
    <?php 
        $salario = ($_POST["salario"] ?? 0);
        $salarioMinimo = 1518.0;
        $qtdSalariosMinimos = (int) ($salario / $salarioMinimo);
        $adicional = ($salario % $salarioMinimo) + ($salario - floor($salario));
        
        // Internacionalização da moeda

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $salario = numfmt_format_currency($padrao, $salario, "BRL");
        $adicional = numfmt_format_currency($padrao, $adicional, "BRL");

    ?>
    <h1>Analisando o salário</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="salario">Informe o seu salário:</label>
        <input type="number" name="salario" id="salario" step="0.01">
        <input type="submit" value="Analisar">
    </form>
    <p>Considerando o salário mínimo como sendo o valor de R$1518,00*</p>

    <section id="resultado">
        <h2>Resultado final</h2>
        <p>Quem recebe um salário de <?=$salario?> ganha <strong><?=$qtdSalariosMinimos?> salário(s) mínimo(s)</strong> + <?=$adicional?>.</p>
    </section>
</body>
</html>
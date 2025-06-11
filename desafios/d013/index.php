<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <style>
        img{
            width: 200px;
        }
    </style>
</head>
<body>

    <?php 
        $dinheiro = $_POST['dinheiro'] ?? 0;
        $n100 = (int) ($dinheiro / 100);
        $n50 = (int) (($dinheiro - $n100 * 100) / 50);
        $n10 = (int) (($dinheiro - $n100 * 100 - $n50 * 50) / 10);
        $n5 = (int) (($dinheiro - $n100 * 100 - $n50 * 50 - $n10 * 10) / 5);

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        $dinheiro = numfmt_format_currency($padrao, $dinheiro, "BRL");

    ?>

    <h1>Caixa Eletrônico</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="dinheiro">Valor para sacar:</label>
        <input type="number" name="dinheiro" id="dinheiro" step="5" min="0">
        <input type="submit" value="Sacar">
    </form>
    <p>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
    <section id="resultado">
        <h2>Saque de <?=$dinheiro?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="./images/100reais.jpg" alt=""> x <?=$n100?> notas</li>
            <li><img src="./images/50reais.jpg" alt=""> x <?=$n50?> notas</li>
            <li><img src="./images/10reais.jpg" alt=""> x <?=$n10?> notas</li>
            <li><img src="./images/5reais.jpg" alt=""> x <?=$n5?> notas</li>
        </ul>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Idade</title>
</head>
<body>

    <?php
        $anoAtual = (int) date('Y');
        $anoNascimento = $_POST["nascimento"] ?? 2000;
        $anoDesejado = $_POST["anoDesejado"] ?? $anoAtual;
        $idade = $anoDesejado - $anoNascimento;
    ?>

    <h1>Cálculo da Idade</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <p>
            <label for="nascimento">Ano que você nasceu:</label>
            <input type="number" name="nascimento" id="nascimento" step="1" min="1" max="<?=$anoAtual - 1?>">
        </p>
        <p>
            <label for="anoDesejado">Quer saber idade em qual ano: (ano atual é <?=$anoAtual?>)</label>
            <input type="number" name="anoDesejado" id="anoDesejado" step="1" value="<?=$anoAtual?>" min="1">
        </p>
        <input type="submit" value="Calcular Idade">
    </form>
    <section id="resultado">
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$anoNascimento?> vai ter <strong><?=$idade?> anos</strong> em <?=$anoDesejado?>.</p>
    </section>
</body>
</html>
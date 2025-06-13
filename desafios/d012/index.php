<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
</head>
<body>
    <?php 
    
        $segundosDesejados = $_POST['segundos'] ?? 0;
        $resto = $segundosDesejados;
        $semanas = (int) ($resto / 604_800);
        $resto %= 604_800;
        $dias = (int) ($resto / 86_400);
        $resto %= 86_400;
        $horas = (int) ($resto / 3_600);
        $resto %= 3_600;
        $minutos = (int) ($resto / 60);
        $resto %= 60;
        $segundos = $resto;

    ?>
    <h1>Calculadora de Tempo</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="segundos">Total de segundos:</label>
        <input type="number" name="segundos" id="segundos" min="0" step="1">
        <input type="submit" value="Calcular">
    </form>
    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=$segundosDesejados?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>
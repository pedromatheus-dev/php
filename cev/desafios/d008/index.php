<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes de um número</title>
</head>
<body>
    <?php 
        $numero = $_POST["numero"] ?? 0;
        $numero = abs($numero);
        $raizQuadrada = $numero ** (1/2);
        $raizCubica = $numero ** (1/3);
        $raizQuadrada = number_format($raizQuadrada, 3, ",", ".");
        $raizCubica = number_format($raizCubica, 3, ",", ".");

    ?>
    <h1>Raízes de um número</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Calcular Raiz">
    </form>
    <section id="resultado">
        <h2>Resultado final</h2>
        <p>Analisando o número <?=$numero?>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <?=$raizQuadrada?></li>
            <li>A sua raiz cúbica é <?=$raizCubica?></li>
        </ul>
    </section>
</body>
</html>
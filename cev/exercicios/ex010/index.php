<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somador de Valores</title>
</head>
<body>
    <?php 
        $valor1 = $_REQUEST["valor1"] ?? 0;
        $valor2 = $_REQUEST["valor2"] ?? 0;
    ?>
    <h1>Somador de Valores</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="valor1">Valor 1</label>
        <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
        <label for="valor2">Valor 2</label>
        <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
        <input type="submit" value="Somar">
    </form>
    <section>
        <?php 
            $soma = $valor1 + $valor2;
        ?>
        <h2>Resultado</h2>
        <p>O resultado da soma entre <?=$valor1?> e <?=$valor2?> é <?=$soma?></p>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
</head>
<body>
    
    <?php 
        $valor1 = $_POST["valor1"] ?? 0;
        $valor2 = $_POST["valor2"] ?? 0;
        $peso1 = $_POST["peso1"] ?? 1;
        $peso2 = $_POST["peso2"] ?? 1;

        $mediaSimples = ($valor1 + $valor2) / 2;
        $mediaPonderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);

        // Formatando os números

        $mediaSimples = number_format($mediaSimples, 2, ",", ".");
        $mediaPonderada = number_format($mediaPonderada, 2, ",", ".");

    ?>

    <h1>Médias Aritméticas</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <p>
            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
        </p>
        <p>
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
        </p>
        <p>
            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
        </p>
        <p>
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
        </p>
        <input type="submit" value="Calcular Médias">
    </form>
    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$valor1?> e <?=$valor2?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=$mediaSimples?>.</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com os pesos <?=$peso1?> e <?=$peso2?> é igual a <?=$mediaPonderada?>.</li>
        </ul>
    </section>
</body>
</html>
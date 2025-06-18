<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php 

        $texto = "   esse é um texto de 32 caracteres   ";

        $texto = trim($texto);

        $qtdLetras = mb_strlen($texto);

        $textoCortado = mb_substr($texto, 3, 15);

        $ultimaOcorrencia = mb_strrpos($texto, "xt") ? : "Sem ocorrência";


    ?>
    <p>Texto: <?=$texto?></p>
    <p>Quantidade de caracteres: <?=$qtdLetras?></p>
    <p>Texto cortado: <?=$textoCortado?></p>
    <p>Ultima ocorrência do "o": <?=$ultimaOcorrencia?></p>
    
</body>
</html>

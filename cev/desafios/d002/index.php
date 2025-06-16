<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
</head>
<body>
    <h1>Sortedor de Números</h1>
    <?php 
        $min = 0;
        $max = 100;
        $num_aleatorio = mt_rand($min, $max);
    ?>
    <p>Gerando um número aleatório entre <?=$min?> e <?=$max?>...</p>
    <p>O valor gerado foi <?=$num_aleatorio?>.</p>
    <!-- <form action="" method="post">
        <input type="submit" value="Gerar">
    </form> -->

    <!-- ir para paginas dinamicamentes ou aleatoriamente coloca no action o codigo php -->
    <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
</body>
</html>
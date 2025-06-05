<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>
    <h1>Operadores aritméticos</h1>
    <?php 
        $exp = 14 * 3 + (33 / 3 - 2 ** 3) - 1;
        $somaValida = "2" + "3"; // 5 inteiro e não "23" string

        echo "<br>$exp<br>$somaValida";
    ?>
</body>
</html>
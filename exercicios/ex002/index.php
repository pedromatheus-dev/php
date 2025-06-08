<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Mostrando data e hora</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo"); 
        echo "<p>Hoje é dia " . date("d/M/Y") . "</p>";
        echo "<p>São ". date("G:i:s") . "</p>";
    ?>
</body>

</html>
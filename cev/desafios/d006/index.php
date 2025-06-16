<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando a divisão</title>
    <style>
        #l1, #l2{
            display: flex;
            flex-flow: row nowrap;
            text-align: center;
        }

        #D, #d, #q, #r{
            padding: 10px;
            width: 50px;
        }

        #q{
            border-left: 1px solid black;
        }

        #d{
            border-left: 1px solid black;
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body>
    <?php 
        $dividendo = $_POST["dividendo"] ?? 1;
        $divisor = $_POST["divisor"] ?? 1;
    ?>
    <h1>Analisando a divisão</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="dividendo">Dividendo</label>
        <input type="number" name="dividendo" id="dividendo">
        <label for="divisor">Divisor</label>
        <input type="number" name="divisor" id="divisor">
        <input type="submit" value="Analisar">
    </form>
    <section id="resultado">
        <h2>Análise da Divisão</h2>
        <div id="l1">
            <div id="D"><?=$dividendo?></div>
            <div id="d"><?=$divisor?></div>
        </div>
        <div id="l2">
            <div id="r"><?=$dividendo % $divisor?></div>
            <div id="q"><?=(int) ($dividendo / $divisor)?></div>
        </div>
    </section>
</body>
</html>
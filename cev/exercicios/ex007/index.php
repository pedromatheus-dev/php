<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcões aritméticas</title>
</head>
<body>
    <h1>Funcões aritméticas</h1>
    <?php 
        define('TESTE', 87345154);
        $valorAbsoluto = abs(-5); // 5
        $conveterBases= base_convert(10, 10, 2); // 10 da base 2 para base 16
        $arrendodamentoCima = ceil(3.3); // 4
        $arrendodamentoBaixo = floor(3.3); // 3
        $arrendodamentoAritmetico = round(3.32); // 3
        $hipotenusa = hypot(6, 8); // 10
        $divisaoInteira = intdiv(10, 3); // 3
        $minimo = min(1, 4, 10, 43, 12, 13); // 1
        $maximo = max(4, 5, 9, 12, 10); // 12
        $pi = M_PI;
        $potencia = pow(4, 2); // 16
        $seno = sin(M_PI / 2); // 1
        $cosseno = cos(M_PI); // -1
        $tangente = tan(0); // -1
        $raizQuadrada = sqrt(81); // 9

        echo "<br>$valorAbsoluto, <br>$conveterBases, <br>$arrendodamentoCima, <br>$arrendodamentoBaixo, <br>$arrendodamentoAritmetico, <br>$hipotenusa, <br>$divisaoInteira, <br>$minimo, <br>$maximo, <br>$pi, <br>$potencia, <br>$seno, <br>$cosseno, <br>$tangente, <br>$raizQuadrada"; 
    ?>
</body>
</html>
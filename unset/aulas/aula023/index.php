<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentação com PHP DOC</title>
</head>
<body>
    <?php 
        /**
         * Calcula o fatorial de um número
         * 
         * @param int $num número para ser calculado o fatorial
         * @return int fatorial do número
         */
        function fatorial(int $num) : int {
            if ($num == 1 || $num == 0){
                return 1;
            }
            $fat = $num * fatorial($num - 1);
            return $fat;
        }
        
        echo fatorial(5);
    ?>
    
</body>
</html>

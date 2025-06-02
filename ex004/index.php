<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>

<body>
    <?php 
        // Tipos primitivos escalares: string, int (ou integer), float (ou double ou real), bool (ou boolean)
        $nome = "Matheus"; // string
        $idade = 20; // int
        $altura = 1.80; // float
        $casado = false; // bool
        $caracteres = 'A'; // string (um único caractere)
        // int pode ser hexadecimal, octal ou binário
        $hex = 0x1A; // hexadecimal 26
        $octal = 010; // octal 8
        $bin = 0b1010; // binário 10

        $baseDezPositivo = 3e5; // notação científica, 3 * 10^5 = 300000
        $baseDezNegativo = 3e-5; // notação científica, 3 * 10^-5 = 0.00003

        var_dump($baseDezNegativo);

        $numString = "123";
        var_dump($numString);
        $numInt = (int) $numString;
        var_dump($numInt); // converte string para int
        phpinfo(); // exibe informações do PHP

        var_dump($casado);
        print $casado;

        // Compostos: array, object
        $arr = [1, 2, 3, 4, 5]; // array
        var_dump($arr);

        class Pessoa {
            private string $nome = "Desconhecido";
        }

        $pessoa1 = new Pessoa();
        $pessoa1->$nome = "Matheus";
        var_dump($pessoa1);
        
        
    ?>
</body>

</html>
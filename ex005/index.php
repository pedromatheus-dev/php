<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com Strings</title>
</head>

<body>
    <h1>Trabalhando com Strings</h1>
    <p>
        <?php 
            // Strings single quoted, double quoted, heredoc e nowdoc
            $nome = "Pedro Matheus";
            $sobrenome = "Dos Santos Souza";
            echo "$nome $sobrenome";
            echo '<br>$nome $sobrenome';
            echo "<br>Meu \"nome\" é $nome e meu \"sobrenome\" é $sobrenome";
            echo <<< FRASE
                <br>Olá, meu nome é $nome
                    e meu sobrenome é $sobrenome
            FRASE;
            echo <<< 'FRASE'
                <br>Olá, meu nome é $nome
                    e meu sobrenome é $sobrenome
            FRASE;
        ?>
    </p>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <!-- operador de coalescência nula ?? -->
        <?php
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "sem sobrenome";
            
            echo "<p>Olá <strong>$nome $sobrenome</strong></p>";
                    
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>

</html>
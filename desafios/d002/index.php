<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
</head>
<body>
    <h1>Sortedor de Números</h1>
    <p>Gerando um número aleatório entre 0 e 100...</p>
    <p>
        O valor gerado foi <?php echo random_int(0,100);?>
    </p>
    <form action="" method="post">
        <input type="submit" value="Gerar">
    </form>

    <!-- ir para paginas dinamicamentes ou aleatoriamente coloca no action o codigo php -->
</body>
</html>
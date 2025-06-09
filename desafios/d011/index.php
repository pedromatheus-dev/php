<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
</head>
<body>

    <?php 
        $preco = $_POST["preco"] ?? 0;
        $reajuste = $_POST["reajuste"] ?? 0;
        $novoPreco = $preco + ($preco * $reajuste);

        // Internacionalização da moeda

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $preco = numfmt_format_currency($padrao, $preco, "BRL");
        $novoPreco = numfmt_format_currency($padrao, $novoPreco, "BRL");

    ?>

    <h1>Reajustador de Preços</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <p>
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0.01" min="0">
        </p>
        <p>
            <label for="reajuste">Percentual de Reajuste: (<strong id="porc">0%</strong>)</label>
        </p>
        <p><input type="range" name="reajuste" id="reajuste" min="0" max="1" step="0.01" value="0" oninput="atualizar()"></p>
        <input type="submit" value="Reajustar">
    </form>
    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava <?=$preco?>, com <strong><?=(int) ($reajuste * 100)?>% de aumento</strong> vai passar a custar <?=$novoPreco?> a partir de agora.</p>
    </section>
    <script>
        function atualizar(){
            let range = document.getElementById('reajuste')
            let porc = document.getElementById('porc')
            porc.innerHTML = `<strong>${parseInt(range.value * 100)}%</strong>`
        }
    </script>
</body>
</html>
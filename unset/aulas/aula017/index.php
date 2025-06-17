<?php 
    declare(strict_types=1); // Declaração de tipos estritos, onde os tipos de dados devem ser exatamente os especificados.

    include 'funcoes.php'; // Inclui o arquivo de configuração, que contém a função carregarConfiguracao.

    $texto = "testando";

    echo imprimirMensagem($texto); // Chama a função imprimirMensagem passando a variável $texto como argumento.

    $numero = 10;

    // imprimirMensagem($numero); // Erro, pois a função espera uma string, mas foi passado um inteiro.
?>
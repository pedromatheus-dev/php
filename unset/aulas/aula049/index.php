<?php

    // coloca o arquivo autoload
    require "vendor/autoload.php";

    $cpf = '01745408339';
    // chamao as classes pelo caminho do namespace (\ barra invertida)
    echo sistema\Helpers::validarCPF($cpf) ? "CPF $cpf Válido" : "CPF $cpf Inválido";
    // chamo uma constante que está presente dentro do arquivo configuracao.php
    echo URL_PRODUCAO;

?>
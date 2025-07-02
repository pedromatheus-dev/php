<?php

    // coloca o arquivo autoload
    require "vendor/autoload.php";

    $cpf = '01745408339';
    // chamao as classes pelo caminho do namespace (\ barra invertida)
    echo sistema\Helpers::validarCPF($cpf) ? "CPF $cpf Válido" : "CPF $cpf Inválido";
    // chamo uma constante que está presente dentro do arquivo configuracao.php
    echo URL_PRODUCAO;
    // ler codumentacao pra ver como chamar as funcoes
    $document = new \Bissolli\ValidadorCpfCnpj\CPF('017.454.083-39');
    var_dump($document->isValid());

?>
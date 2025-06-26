<?php 

    include './Helpers.php';

    use aula045\Helpers;

    $cpf = "017.454.083-39";
    echo Helpers::validarCPF($cpf) ? "CPF $cpf Válido" : "CPF $cpf Inválido";
?>
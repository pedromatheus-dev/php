<?php 
    include 'configuracao.php'; // include serve para incluir um arquivo que não é obrigatório, mas se não for encontrado, o código continuará a ser executado.

    require 'configuracao.php'; // require serve para incluir um arquivo que é obrigatório, se não for encontrado, o código irá parar de ser executado. (Fatal Error)

    // require_once e include_once são usados para incluir arquivos apenas uma vez, evitando múltiplas inclusões que podem causar erros.

    // require_once 'configuracao.php';
    // include_once 'configuracao.php';

    echo "Arquivo index";
;
?>
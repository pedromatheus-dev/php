<?php 
    
    require_once 'helpers.php';
    echo validarEmail("pedro@gmail.com") ? "E-mail válido" : "E-mail não válido";
    echo "<br>";
    echo validarUrl("https://uvanet.br") ? "URL válida" : "URL não válida";
?>
<?php 
    define('PAIS', "Brasil");
    define('ESTADO', "Ceará");
    define('CIDADE', "Santana do Acaraú");

    const BAIRRO = "Centro";
    const RUA = "Rua João Arcanjo de Maria";
    const NUMERO = 85;

    $endereco = RUA . ", ". NUMERO . ", " . BAIRRO . ", " . CIDADE . " - " . ESTADO . ", ". PAIS;
    echo $endereco;

?>
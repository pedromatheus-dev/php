<?php 

    date_default_timezone_set("America/Sao_Paulo");

    $hora = '15';

    $saudacao = match(true){
        $hora >= 6 and $hora < 12 => 'Bom dia',
        $hora >= 12 and $hora < 18 => 'Boa tarde',
        $hora >= 18 and $hora < 23 => 'Boa noite',
        default => 'Boa madrugada'
    };

    echo $saudacao;

    
?>
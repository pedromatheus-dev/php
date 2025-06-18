<?php 

    date_default_timezone_set("America/Sao_Paulo");
    $hora = (int) date('H');
    // $hora = 3;
    // echo $hora;

    function saudacao(int $hora) : string {
        if ($hora >= 6 && $hora < 12)
            $saudacao = "<h1>Bom dia</h1>";
        elseif ($hora >= 12 AND $hora < 18)
            $saudacao = "<h1>Boa tarde</h1>";
        else
            $saudacao = "<h1>Boa noite</h1>";

        return $saudacao;
    }

    echo saudacao($hora);


    
?>
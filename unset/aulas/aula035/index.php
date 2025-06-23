<?php 

    date_default_timezone_set("America/Sao_Paulo");
    
    $hora = date('H');

    switch ($hora){
        case $hora >= 6 and $hora < 12:
            echo "Bom dia";
            break;
        case $hora >= 12 and $hora < 18:
            echo "Boa tarde";
            break;
        case $hora >= 18 and $hora < 23:
            echo "Boa noite";
            break;
        default:
            echo "Boa madrugada";
            break;
    }

?>


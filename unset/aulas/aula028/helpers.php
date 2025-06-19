<?php 

    date_default_timezone_set('America/Sao_Paulo');
    /**
     * Conta o tempo decorrido de uma data
     * 
     * @param string $data data a ser calculada
     * @return string tempo relativo da data
     */
    function contarTempo(string $data) : string {
        $agora = strtotime(date('Y-m-d H:i:s'));
        echo "A diferença desde $data   é:<br>";
        $data = strtotime($data);
        // var_dump($data);
        // var_dump($agora);
        $diferenca = $agora - $data;
        $segundos = $diferenca;
        $minutos = round($diferenca / 60);
        $horas = round($diferenca / 3600);
        $dias = round($diferenca / 86400);
        $semanas = round($diferenca / 604800);
        $meses = round($diferenca / 2419200);
        $anos = round($diferenca / 29030400);
        if ($segundos <= 60){
            return 'agora';
        }elseif($minutos <= 60){
            return $minutos == 1 ? 'há 1 minuto' : "há $minutos minutos"; 
        }elseif($horas <= 24){
            return $horas == 1 ? 'há 1 hora' : "há $horas horas";
        }elseif($dias <= 7){
            return $dias == 1 ? 'há 1 dia' : "há $dias dias";
        }elseif($semanas <= 4){
            return $semanas == 1 ? 'há 1 semana' : "há $semanas semanas";
        }elseif($meses <= 12){
            return $meses == 1 ? 'há 1 mês' : "há $meses meses";
        }else{
            return $anos == 1 ? 'há 1 ano' : "há $anos anos";
        }
    }
?>
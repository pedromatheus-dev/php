<?php 

    date_default_timezone_set("America/Sao_Paulo");

    /**
     * @return string retorna a data atual no formato [dia da semana], [dia] de [mês] de [ano] às [hora]:[minuto]
     */
    function agora() : string{
        $mesesAno = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];

        $diasSemana= ['domingo', 'segunda-feira', 'terça-feira', 'quarta-feira', 'quinta-feira', 'sexta-feira', 'sábado', 'domingo'];

        $hora = date('H');
        $minuto = date('i');
        $dia = date('d');
        $mes = date('n') - 1;
        $ano = date('Y');
        $diaSemana = date('w');
        $diaSemanaAtual = $diasSemana[$diaSemana];
        $mesAtual = $mesesAno[$mes];

        return "$diaSemanaAtual, $dia de $mesAtual de $ano às $hora:$minuto.";
    }

?>
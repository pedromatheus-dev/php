<?php 

    /**
     * Transforma um número int ou float para um formatação em Real Brasileiro (BRL)
     * 
     * @param float $numero número a ser convertido
     * @return string string com o número formatado
     */
    function numeroParaReal(float $numero) : string {
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $numeroFormatado = numfmt_format_currency($padrao, $numero, "BRL");
        return $numeroFormatado ? : "Não foi possível formatar";
    }

    echo numeroParaReal("1");

?>
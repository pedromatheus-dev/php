<?php 

    function validarUrl(string $url) : string{
        if (mb_strlen($url) < 10){
            $motivo = "Tamanho da URL insuficiente";
            echo $motivo . "<br>";
            return false;
        }
        if (!str_contains($url, "https://") and !str_contains($url, "http://")){
            $motivo = "Nâo contém \"http://\" ou \"http://\"";
            echo $motivo . "<br>";
            return false;
        }
        if (!str_contains($url, ".")){
            $motivo = "Não contém o \".\" para separar domínio do TLD";
            echo $motivo . "<br>";
            return false;
        }
        if(mb_strlen(mb_strcut($url, mb_strpos($url, ".") + 1)) < 2){
            $motivo = "TLD inválido";
            echo $motivo . "<br>";
            return false;
        }
        return true;

    }

?>
<?php 

    function validarCPF(string $cpf) : bool {

        if (mb_strlen($cpf) != 11){
            echo "CPF deve conter 11 números <br>";
            return false;
        }
        
        $mult = 10;
        $soma1 = 0;
        for ($i = 0; $i < 9; $i++){
            $soma1 += (int) $cpf[$i] * $mult;
            $mult--; 
        }
        if ($soma1 % 11 < 2){
            $d1 = 0;
        }else{
            $d1 = 11 - $soma1 % 11;
        }

        $mult = 11;
        $soma2 = 0;
        for ($j = 0; $j < 9; $j++){
            $soma2 += (int) $cpf[$j] * $mult;
            $mult--;
        }

        $soma2 += $d1 * $mult;

        if ($soma2 % 11 < 2){
            $d2 = 0;
        }else{
            $d2 = 11 - $soma2 % 11;
        }

        if ((int) $cpf[9] == $d1 and (int) $cpf[10] == $d2){
            return true;
        }else{
            return false;
        }  

    }
    $cpf = "864764564165";
    echo validarCPF($cpf) ? "CPF $cpf Válido" : "CPF $cpf Inválido";

?>
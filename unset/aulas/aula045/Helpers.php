<?php 

    // declarando namespace (pasta onde se encontra o arquivo que contem a classe)
    namespace aula045;

    class Helpers{
        
        public static function limparCPF(string $cpf) : string {

            return preg_replace('/[^0-9]/', '', $cpf);
        }

        public static function validarCPF(string $cpf) : bool {
        //  é assim que se chama uma função estática dentro de uma classe
            $cpf = self::limparCPF($cpf);

            if (mb_strlen($cpf) != 11 or preg_match('/(\d)\1{10}/', $cpf)){
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
    }

?>
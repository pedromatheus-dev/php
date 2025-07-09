<?php 

    // declarando namespace (pasta onde se encontra o arquivo que contem a classe)
    namespace sistema\Nucleo;

    use Exception;

    class Helpers{

        public static function isLocalhost() : bool {
            $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
            return $servidor == 'localhost' ? true : false;
        }
        /**
         * @param string $url caminho a ser concatenado com o servidor
         * @return string retorna a URL montada com a URL e o caminho passado como parâmetro
         */
        public static function env(string $url = null) : string {
            $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
            $ambiente = str_starts_with($url, "/") ? $url : "/" . $url;
            return $servidor == 'localhost' ? URL_DESENVOLVIMENTO . $ambiente : URL_PRODUCAO . $ambiente;
        }

        // public static function env(string $url = null) : string {
        //     $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
        //     $base = $servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO;
        //     if ($url === null || $url === '') {
        //         return $base;
        //     }
        //     $ambiente = str_starts_with($url, "/") ? $url : "/" . $url;
        //     return $base . $ambiente;
        // }
        
        public static function redirecionar(string $url = null) : void {
            header('HTTP/1.1 302 Found');

            $local = ($url ? self::env($url) : self::env());

            header("Location: {$local}");
            exit();
        }

        public static function limparCPF(string $cpf) : string {

            return preg_replace('/[^0-9]/', '', $cpf);
        }

        public static function validarCPF(string $cpf) : bool {
        //  é assim que se chama uma função estática dentro de uma classe
            $cpf = self::limparCPF($cpf);

            if (mb_strlen($cpf) != 11 or preg_match('/(\d)\1{10}/', $cpf)){
                throw new Exception('O CPF precisa ter 11 dígitos');
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
                throw new Exception("CPF inválido");
            }  

    }
    }

?>
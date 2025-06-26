<?php 

    // declarando namespace (pasta onde se encontra o arquivo que contem a classe)
    namespace aula044;

    class Mensagem{
        public $texto = "teste";

        public function __toString() {
            return $this->texto;
        }
    }

?>
<?php 
    // coloca o nome do namespace que quer utilizar (nome da pasta raiz)
    namespace sistema\Nucleo;

    use sistema\Suporte\Template;

    class Controlador{
        protected Template $template;

        public function __construct(string $directory)
        {
            $this->template = new Template($directory);
        }
    }

?>
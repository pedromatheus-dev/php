<?php

    namespace sistema\Controlador;

    use sistema\Nucleo\Controlador;

    class SiteControlador extends Controlador{

        public function __construct()
        {
            parent::__construct('templates/site/views');
        }

        public function index() : void{
            echo $this->template->renderizar('index.html', [
                'titulo' => 'isso é um título',
                'subtitulo' => 'isso é um subtítulo'
            ]);
        }

        public function sobre() : void{
            echo $this->template->renderizar('sobre.html', [
                'titulo' => 'isso é um título do sobre',
                'subtitulo' => 'isso é um subtítulo do sobre'
            ]);
        }

        public function contato() : void{
            echo $this->template->renderizar('contato.html', [
                'titulo' => 'isso é um título do contato',
                'subtitulo' => 'isso é um subtítulo do contato'
            ]);
        }
    }

?>
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
    }

?>
<?php 

    namespace sistema\Suporte;
    class Template
    {
        private \Twig\Environment $twig;

        public function __construct(string $directory)
        {
            $loader = new \Twig\Loader\FilesystemLoader($directory);

            $this->twig = new \Twig\Environment($loader);
        }

        public function renderizar(string $view, array $dados){
            return $this->twig->render($view, $dados);
        }
    }


?>
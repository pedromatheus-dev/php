<?php 

    namespace sistema\Suporte;

    use Twig\Lexer;
    use sistema\Helpers;

    class Template
    {
        private \Twig\Environment $twig;

        public function __construct(string $directory)
        {
            $loader = new \Twig\Loader\FilesystemLoader($directory);

            $this->twig = new \Twig\Environment($loader);

            $lexer = new Lexer($this->twig, array(
                $this->helpers()
            ));

            $this->twig->setLexer($lexer);
        }

        public function renderizar(string $view, array $dados) : string {
            return $this->twig->render($view, $dados);
        }

        private function helpers() : void {
            array(
                $this->twig->addFunction(new \Twig\TwigFunction('validCPF', function(string $cpf){
                    return Helpers::validarCPF($cpf);
                }))
            );
        }
    }


?>
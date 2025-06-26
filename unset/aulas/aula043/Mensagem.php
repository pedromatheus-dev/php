<?php 

class Mensagem{
    private $texto;
    private $css = '';
    // Métodos mágicos
    public function __toString()
    {
        return $this->renderizar();
    }

    public function renderizar() : string {
        return "<div class='{$this->css}'>{$this->texto}</div>";
    }

    private function filtrar(string $msg) : string {
        return filter_var($msg, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    public function sucesso(string $msg) : string {
        
        $this->css = "alert alert-success";
        $this->texto = $this->filtrar($msg);

        return $this->renderizar();
    }
    
    public function erro(string $msg) : string {
        
        $this->css = "alert alert-danger";
        $this->texto = $this->filtrar($msg);

        return $this->renderizar();
    }

    public function info(string $msg) : string {
        
        $this->css = "alert alert-primary";
        $this->texto = $this->filtrar($msg);

        return $this->renderizar();
    }
}

?>
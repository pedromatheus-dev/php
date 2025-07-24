<?php 

namespace sistema\Modelo;

use sistema\Nucleo\Conexao;

class PostModelo{
    public function ler(int $id = null) : array {

        $query = "SELECT * FROM posts";
         
        $stmt = Conexao::getInstance()->query($query);
        $resultado = $stmt->fetchAll();

        return $resultado;
    }
}

?>

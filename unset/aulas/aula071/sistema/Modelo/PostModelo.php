<?php 

namespace sistema\Modelo;

use sistema\Nucleo\Conexao;

class PostModelo{
    public function ler(int $id = null) : array {

        $where = ($id ? "WHERE id = {$id}" : '');
        $query = "SELECT * FROM posts";
        $query = "SELECT * FROM posts WHERE id = 3";
        $query = "SELECT * FROM posts WHERE id = 3 AND status = 1 OR status = 0"; // id =3 e status = 1? se sim, retorna o post se nao retorna os que tem status 0
        $query = "SELECT * FROM posts WHERE LIMIT 2"; // retorna os dois primeiros posts
        $query = "SELECT * FROM posts WHERE LIMIT 2 OFFSET 2"; // retorna os dois posts a partir do terceiro
        $query = "SELECT * FROM posts WHERE LIMIT 2,2"; // retorna os dois posts a partir do terceiro resumida
        $query = "SELECT * FROM posts WHERE titulo = 'Como fazer um Banco de Dados'"; // retorna o post com o titulo "Como fazer um Banco de Dados"
        $query = "SELECT * FROM posts {$where}";
        
        $stmt = Conexao::getInstance()->query($query);
        $resultado = $stmt->fetchAll();

        return $resultado;
    }
}

?>

<?php 

    namespace sistema\Nucleo;

    use PDO;
    use PDOException;
    class Conexao {
    
        private static $instance;
        public static function getInstance() {
            if (empty(self::$instance)) {

                try {
                    self::$instance = new PDO('mysql:host='.HOST_BD.';dbname='.NOME_BD.';port='.PORTA_BD, USUARIO_BD, SENHA_BD, [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                        PDO::ATTR_CASE => PDO::CASE_NATURAL
                    ]);
                } catch (PDOException $e) {
                    die('Conexão falhou: ' . $e->getMessage());
                }

                return self::$instance;
        
            }
    
        }

        protected function __construct() {
            // Evita a instanciação direta da classe
        }

        private function __clone() {
            // Evita a clonagem da instância
        }
    }

?>
<?php 
    define('URL_DESENVOLVIMENTO', 'http://localhost/blog');
    define('URL_PRODUCAO', 'https://website.com.br');
    /**
     * @return bool retorna se o ambiente do servidor é localhost
     */
    function isLocalhost() : bool {
        $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
        return $servidor == 'localhost' ? true : false;
    }
    /**
     * @param string $url caminho a ser concatenado com o servidor
     * @return string retorna a URL montada com a URL e o caminho passado como parâmetro
     */
    function env(string $url) : string {
        $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
        $ambiente = str_starts_with($url, "/") ? $url : "/" . $url;
        return $servidor == 'localhost' ? URL_DESENVOLVIMENTO . $ambiente : URL_PRODUCAO . $ambiente;
    }
?>
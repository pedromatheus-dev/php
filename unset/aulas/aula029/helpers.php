<?php 

    function validarEmail(string $email) : bool {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    function validarUrl(string $url) : bool {
        return filter_var($url, FILTER_VALIDATE_URL);
    }
?>
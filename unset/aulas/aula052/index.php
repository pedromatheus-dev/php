<?php

    // coloca o arquivo autoload
    require "vendor/autoload.php";

    use Pecee\SimpleRouter\SimpleRouter;



    SimpleRouter::setDefaultNamespace('sistema\Controlador');

    // SimpleRouter::get(URL_BASE.'blog/', '@index');
    SimpleRouter::get(URL_BASE.'blog/', function() {
        return 'Hello world';
    });
    // SimpleRouter::get('blog/sobre-nos', 'Controlador@sobre');

    SimpleRouter::start();

?>
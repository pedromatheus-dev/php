<?php

    // coloca o arquivo autoload
    require "vendor/autoload.php";

    use sistema\Nucleo\Helpers;

    use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
    use Pecee\SimpleRouter\SimpleRouter;


    try {
        SimpleRouter::setDefaultNamespace('sistema\Controlador');

        SimpleRouter::get(URL_BASE,'SiteControlador@index');
        SimpleRouter::get(URL_BASE.'404', 'SiteControlador@erro404');

        SimpleRouter::start();
    } catch (Pecee\SimpleRouter\Exceptions\NotFoundHttpException $ex) {
        Helpers::redirecionar('404');
    }

    




?>
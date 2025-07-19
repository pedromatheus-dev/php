<?php

    // coloca o arquivo autoload
    require "vendor/autoload.php";

    use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
    use Pecee\SimpleRouter\SimpleRouter;
    use sistema\Nucleo\Helpers;
    use sistema\Nucleo\Conexao;

    $con = Conexao::getInstance();

    // try {
    //     Helpers::validarCPF('018');
    // } catch (Exception $e) {
    //     echo $e->getMessage();
    // }


    try {

        SimpleRouter::setDefaultNamespace('sistema\Controlador');
        SimpleRouter::get(URL_BASE, 'SiteControlador@index');
        SimpleRouter::get(URL_BASE."sobre-nos", 'SiteControlador@sobre');
        SimpleRouter::get(URL_BASE."contato", 'SiteControlador@contato');
        SimpleRouter::get(URL_BASE."404", 'SiteControlador@erro404');
        SimpleRouter::start();
    } catch (Pecee\SimpleRouter\Exceptions\NotFoundHttpException $ex){
        Helpers::redirecionar('404');
    }


?>
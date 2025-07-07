<?php 

    use Pecee\SimpleRouter\SimpleRouter;

    define('URL_BASE', 'php/unset/aulas/aula060/');
    SimpleRouter::setDefaultNamespace('sistema\Controlador');

    SimpleRouter::get(URL_BASE, 'SiteControlador@index');
    SimpleRouter::get(URL_BASE."sobre-nos", 'SiteControlador@sobre');
    SimpleRouter::get(URL_BASE."contato", 'SiteControlador@contato');


?>
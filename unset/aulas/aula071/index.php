<?php

    // coloca o arquivo autoload
    require "vendor/autoload.php";

    use sistema\Modelo\PostModelo;

    $posts = (new PostModelo())->ler(2);

    foreach ($posts as $post){
        echo $post->titulo . "<br>";
        echo $post->texto . "<br>";
    }




?>
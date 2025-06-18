<?php 

    // Limpando tags HTML em PHP

    $texto = "<h1>Titulo</h1><br><p>Um texto</p>";

    $textoLimpo = strip_tags($texto);

    echo $textoLimpo;
?>
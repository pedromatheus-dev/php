<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<?php 

    include './Mensagem.php';

    $msg = new Mensagem();

    $conteudoSucesso = "Isso é uma mensagem de sucesso";
    $conteudoErro = "Isso é uma mensagem de erro";
    $conteudoInfo = "Isso é uma mensagem de informação";

    // echo $msg->sucesso($conteudoSucesso);
    // echo $msg->erro($conteudoErro);
    // echo $msg->info($conteudoInfo);
    // Não da erro, pois estamos o método mágico __toString()
    echo $msg; 

?>
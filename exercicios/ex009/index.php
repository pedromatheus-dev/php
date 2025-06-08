<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglopbais</title>
</head>
<body>
    <h1>Superglopbais</h1>
    <pre>
<h2>GET</h2>
<?php
    var_dump($_GET);
?>
<h2>POST</h2>
<?php
    var_dump($_POST);
?>
<h2>REQUEST</h2>
<?php
    var_dump($_REQUEST); // GET + POST
?>
<h2>COOKIE</h2>
<?php
    setcookie("dia-da-semana", "segunda", time() + 3600);
    var_dump($_COOKIE);
?>
<h2>FILES</h2>
<?php
    var_dump($_FILES);  
?>
<h2>SESSION</h2>
<?php
    session_start();
    $_SESSION["teste-session"] = "session_1";
    var_dump($_SESSION);
?>
<h2>ENV</h2>
<?php
    var_dump($_ENV);
    foreach (getenv() as $key => $value) {
        echo "<br>$key -> $value</br>";
    }
?>
<h2>SERVER</h2>
<?php
    var_dump($_SERVER);
?>
<h2>GLOBALS</h2>
<?php
    var_dump($GLOBALS);
?>
    </pre>
</body>
</html>
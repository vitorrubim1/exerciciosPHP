<head>
    <meta charset="utf-8"> 
</head>

<?php

require_once "class/LetraNumero.class.php";

    $verifica = new Verifica;

    $verifica ->setValor(strtolower($_POST['valor']));

    echo $verifica -> checagem();


?>
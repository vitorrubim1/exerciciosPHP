<head>
    <meta charset="utf-8"> 
</head>

<?php

require_once "class/imc.class.php";

    $verifica = new Verifica;

    $verifica -> setNome($_POST['nome']);
    $verifica -> setPeso(($_POST['peso']));
    $verifica -> setAltura(($_POST['altura']));
    $verifica -> setSexo($_POST['sexo']);

    //print_r ($verifica); exit;

    echo $verifica -> checagem();


?>
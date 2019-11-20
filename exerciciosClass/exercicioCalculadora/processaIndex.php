<head>
    <meta charset='utf-8'> 
</head>

<?php
    require_once "class/Calculadora.class.php";

    $calcula = new Calcula;

    $calcula -> setValor1($_POST["valor1"]);
    $calcula -> setValor2($_POST["valor2"]);
    $calcula -> setOperacao($_POST["operacao"]);

    echo $calcula -> Conta();



    

?>
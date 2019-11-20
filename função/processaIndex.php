<?php
    require_once 'funcao.php';

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operacao = $_POST['operacao'];

    if ($operacao == "adicao")
    {
        echo adicao ($n1, $n2);
    }
    else if ($operacao == "subtracao")
    {
        echo subtracao ($n1, $n2);
    }    
    else if ($operacao == "multiplicacao")
    {
        echo multiplicacao ($n1, $n2);
    } 
    else {
        echo divisao ($n1, $n2);
    }   
    
    
    
    

?>
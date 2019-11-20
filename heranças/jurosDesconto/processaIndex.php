<?php
    require_once 'funcao.php';

    $valor = $_POST['valor'];
    $porcentagem = $_POST['porcentagem'];
    $operacao = $_POST['operacao'];


    if ($operacao == "desconto")
    {
        echo desconto($valor, $porcentagem);
    }
    else 
    {
        echo juros($valor, $porcentagem);
    }

    
    

?>
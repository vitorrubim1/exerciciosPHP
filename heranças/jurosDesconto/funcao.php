<?php

function desconto($valor, $porcentagem)
{
    
        $resultado = $valor + (($porcentagem/100) * $valor);

        echo "O juros em cima do valor: $resultado";
    
}

function juros($valor, $porcentagem)
{
    
        $resultado = $valor - (($porcentagem/100) * $valor);
        echo "O Desconto em cima do valor: $resultado";
    
}
?>

<?php
    include '../conexao.php';

    $id = $_GET ['id'];

    $sql = "DELETE*FROM usuario WHERE idUsuario = $id";
    $delete = mysli_query ($conexao, $sql);

    header("Location: ../aprovarUsuario.php"); //redireciona novamente para pag de aprovação

?>
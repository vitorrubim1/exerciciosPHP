<?php
include '../conexao.php';


$id = $_GET['id'];
$nivel = $_GET['nivel'];

if ($nivel == 1) {

    $update = "UPDATE usuarios SET status ='Ativo', nivel = 1 WHERE idUsuario = $id ";
    $atualizacao = mysqli_query($conexao, $update);
    echo "Administrador Aprovado.";
}
if ($nivel == 2) {

    $update = "UPDATE usuarios SET status ='Ativo', nivel = 2 WHERE idUsuario = $id ";
    $atualizacao = mysqli_query($conexao, $update);
    echo "Funcionário Aprovado.";
}
if ($nivel == 3) {

    $update = "UPDATE usuarios SET status ='Ativo', nivel = 3 WHERE idUsuario = $id ";
    $atualizacao = mysqli_query($conexao, $update);
    echo "Conferente Aprovado.";
}
header("Location: ../aprovarUsuario.php");

?>
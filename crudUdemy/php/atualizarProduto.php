<?php
include 'conexao.php';
$id = $_POST['id'];
//$numeroProduto = $_POST['numeroProduto'];
$nomeProduto = $_POST['nomeProduto'];
$categoriaProduto = $_POST['categoriaProduto'];
$quantidadeProduto = $_POST['quantidadeProduto'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE estoque SET nomeProduto='$nomeProduto', categoriaProduto='$categoriaProduto', 
    quantidadeProduto=$quantidadeProduto, fornecedor='$fornecedor' WHERE idEstoque = $id";

$atualizar = mysqli_query($conexao, $sql);

?>
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 400px">
    <div class="alert alert-success" role="alert" style="margin-top:20px">
        Dados Atualizado com Sucesso!
    </div>
    <a class="btn btn-sm btn-secondary" href="listarProduto.php" role="button">Voltar</a>

</div>
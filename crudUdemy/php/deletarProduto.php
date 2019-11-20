<?php
    include '../conexao.php';
    $id = $_GET['id'];

    $sql= "DELETE FROM estoque WHERE idEstoque = $id";
    $deletar = mysqli_query($conexao, $sql);
?>
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 400px; width:500px">
    <div class="alert alert-danger" role="alert" style="margin-top:20px">
        Dados Deletado com Sucesso!
    </div>
    <a class="btn btn-sm btn-secondary" href="../listarProduto.php" role="button">Voltar</a>

</div>
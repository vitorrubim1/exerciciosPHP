<?php
    include '../conexao.php';
    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO categoria (nomeCategoria) VALUE ('$categoria')";
    $inserir = mysqli_query($conexao, $sql);
?>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 400px">
    <div class="alert alert-success" role="alert" style="margin-top:20px">
        Categoria inserida com sucesso!
    </div>
    <a class="btn btn-sm btn-secondary" href="../adicionarCategoria.php" role="button">Voltar</a>

</div>
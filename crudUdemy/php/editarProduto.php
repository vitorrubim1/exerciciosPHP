<?php

include '../conexao.php';
$id = $_GET['id'];
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Formulário de Cadastro</title>

    <!-- Required meta tags and links -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container" style="margin-top:40px; width:500px">
        <form action="atualizarProduto.php" method="post"> 
            <?php
            $sql = "SELECT*FROM estoque WHERE idEstoque = $id";
            $buscar = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($buscar)) {

                $idEstoque = $array['idEstoque'];
                $numeroProduto = $array['numeroProduto'];
                $nomeProduto = $array['nomeProduto'];
                $categoriaProduto = $array['categoriaProduto'];
                $quantidadeProduto = $array['quantidadeProduto'];
                $fornecedor = $array['fornecedor'];
                ?>


                <center>
                    <h4> Formulário de Cadastro </h4>
                </center> <br>

                <div class="form-group">
                    <label>Nº do Produto</label>
                    <input type="number" name="numeroProduto" class="form-control" disabled value="<?php echo $numeroProduto ?>">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>">
                </div>
                <div class="form-group">
                    <label>Nome do Produto</label>
                    <input type="text" name="nomeProduto" class="form-control" value="<?php echo $nomeProduto ?>">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoriaProduto">

                        <?php
                            include 'conexao.php';
                            $sql = "SELECT*FROM categoria";
                            $buscar = mysqli_query($conexao, $sql);

                            while ($array = mysqli_fetch_array($buscar)) {

                                $idCategoria = $array['idCategoria'];
                                $nomeCategoria = $array['nomeCategoria'];

                                ?>
                            <option> <?php echo $nomeCategoria ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" name="quantidadeProduto" class="form-control" value="<?php echo $quantidadeProduto ?>">
                </div>
                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">

                        <?php
                            include '../conexao.php';
                            $sql2 = "SELECT*FROM fornecedor ORDER BY nomeFornecedor ASC";
                            $buscar2 = mysqli_query($conexao, $sql2);

                            while ($array2 = mysqli_fetch_array($buscar2)) {

                                $idFornecedor = $array2['idFornecedor'];
                                $nomeFornecedor = $array2['nomeFornecedor'];

                                ?>

                            <option> <?php echo $nomeFornecedor  ?> </option>

                        <?php  } ?>
                    </select>
                </div>

                <!-- Para deixar o botão do lado dirento -->
                <div style="text-align: right">
                    <button type="submit" class="btn btn-dark btn-sm">Atualizar</button>
                </div>

                <!--Fechamento da chave do while-->
            <?php } ?>
        </form>
    </div>







    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
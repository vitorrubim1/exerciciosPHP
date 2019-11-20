<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>
    <!-- Required meta tags and links -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

    <?php
    session_start();
    $usuario = $_SESSION['usuario'];

    //se não tiver logado nao chega aq  
    if (!isset($_SESSION['usuario'])) {

        header('Location:index.php');
    }

    include 'conexao.php';
    //Listar o nivel do usuário
    $sql = "SELECT nivel FROM usuarios WHERE email = '$usuario' AND status = 'Ativo' ";
    $buscar = mysqli_query($conexao, $sql);
    $array = mysqli_fetch_array($buscar);
    $nivel = $array['nivel'];

    ?>

    <div class="container" style="margin-top:40px">
        <!-- Botão voltar -->
        <div style="text-align:right">
            <a role="button" href="menu.php" class="btn btn-primary btn-sm">Voltar</a>
        </div>
        <h3>Lista de Produtos</h3> <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tr>
                <?php
                include 'conexao.php';
                $sql = "SELECT*FROM estoque";
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {

                    $idEstoque = $array['idEstoque'];
                    $numeroProduto = $array['numeroProduto'];
                    $nomeProduto = $array['nomeProduto'];
                    $categoriaProduto = $array['categoriaProduto'];
                    $quantidadeProduto = $array['quantidadeProduto'];
                    $fornecedor = $array['fornecedor'];

                    ?>
            <tr>
                <td> <?php echo $numeroProduto ?> </td>
                <td> <?php echo $nomeProduto ?> </td>
                <td> <?php echo $categoriaProduto ?> </td>
                <td> <?php echo $quantidadeProduto ?> </td>
                <td> <?php echo $fornecedor ?> </td>

                <!-- ?id= echo $idEstoque para enviar metodo GET para página editarProdutos -->
                <td>

                    <?php
                        if (($nivel == 1) || ($nivel == 2)) {
                            ?>

                        <a class="btn btn-warning btn-sm" href="php/editarProduto.php?id=<?php echo $idEstoque ?>" role="button">Editar</a>

                        <!-- Fechando a chave if e verificando nivel para exclusão -->
                    <?php }

                        if ($nivel == 1) {
                            ?>

                        <a class="btn btn-danger btn-sm" href="php/deletarProduto.php?id=<?php echo $idEstoque ?>" role="button">Excluir</a>
                    <?php } ?>
                </td>
            </tr>

            <!-- Fechamento da chave do while, para envolver todos os produtos-->
        <?php } ?>

        </tr>   
        </table>
    </div>
    <!-- Links JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
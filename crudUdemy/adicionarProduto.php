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
    <?php
    //startando a SESSION e comparando-a com a do index1.php
    //SESSION para saber se o usuário esta logado, impedindo de ir para pag pela URL
    session_start();
    $usuario = $_SESSION['usuario'];

    if (!isset($_SESSION['usuario'])) {

        header('Location:index.php');
    }

    include 'conexao.php';
    //Listar o nivel do usuário
    $sql = "SELECT nivel FROM usuarios WHERE email = '$usuario' AND status = 'Ativo' ";
    $buscar = mysqli_query($conexao, $sql);
    $array = mysqli_fetch_array($buscar);
    $nivel = $array['nivel'];
    //print_r($sql);exit;
    ?>
    <div class="container" style="margin-top:20px; width:500px">

        <div style="text-align: right">
            <a role="button" href="menu.php" class="btn btn-primary btn-sm">Voltar</a>
        </div>

        <form action="php/inserirProduto.php" method="post" id="formulario">

            <h4> Formulário de Cadastro de Produtos </h4>
            <br>

            <div class="form-group">
                <label>Nº do Produto</label>
                <input type="number" name="numeroProduto" class="form-control" placeholder="Insira o número do Produto:" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="text" name="nomeProduto" class="form-control" placeholder="Insira o Nome do Produto:" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoriaProduto" required>

                    <?php
                    include 'conexao.php';
                    $sql = "SELECT*FROM categoria ORDER BY nomeCategoria ASC";
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
                <input type="number" name="quantidadeProduto" class="form-control" placeholder="Insira a Quantidade do Produto:" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor">

                    <?php
                    include 'conexao.php';
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
                <button type="submit" class="btn btn-dark btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>
    <!-- jQuery and JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
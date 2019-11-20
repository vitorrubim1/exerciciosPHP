<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags and Links-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

    <?php    
        //startando a SESSION e comparando-a com a do index1.php
        //SESSION para saber se o usuário esta logado, impedindo de ir para pag pela URL
        session_start();
        $usuario = $_SESSION['usuario'];

        if (!isset($_SESSION['usuario'])){

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

    <div class="container" style="margin-top:50px">
        <div class="row">

        <?php
            if($nivel == 1||$nivel == 2){
    
        ?>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Produto</h5>
                        <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
                        <a href="adicionarProduto.php" class="btn btn-primary">Cadastrar Produto</a>
                    </div>
                </div>
            </div>

        <!--Fechamento do php-->
        <?php  }  ?>
        
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lista de Produtos</h5>
                        <p class="card-text">Visualizar, editar e excluir os Produtos</p>
                        <a href="listarProduto.php" class="btn btn-primary"> Lista de Produtos</a>
                    </div>
                </div>
            </div>


            <div class="col-sm-6" style="margin-top: 20px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Categoria</h5>
                        <p class="card-text">Opção para adicionar categoria de produtos.</p>
                        <a href="adicionarCategoria.php" class="btn btn-primary">Cadastrar Categoria</a>
                    </div>
                </div>
            </div>


            <div class="col-sm-6"style="margin-top: 20px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Fornecedor</h5>
                        <p class="card-text">Opção para adicionar fornecedores</p>
                        <a href="adicionarFornecedor.php" class="btn btn-primary"> Cadastrar Fornecedores</a>
                    </div>
                </div>
            </div>


            <div class="col-sm-6"style="margin-top: 20px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar Usuários</h5>
                        <p class="card-text">Cadastro de Usuários</p>
                        <a href="cadastroUsuario.php" class="btn btn-primary">Cadastrar Usuários</a>
                    </div>
                </div>
            </div>


            <div class="col-sm-6"style="margin-top: 20px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Aprovar Usuários</h5>
                        <p class="card-text">Aprovar Usuários Cadastrados</p>
                        <a href="aprovarUsuario.php" class="btn btn-primary"> Aprovar Usuários</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
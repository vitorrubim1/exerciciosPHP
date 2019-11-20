<!doctype html>
<html lang="pt-br">

<head>
    <title>Aprovar Usuário</title>
    <!-- Required meta tags and links -->
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

    <div class="container" style="margin-top:40px">

        <div style="text-align:right">
            <a role="button" href="menu.php" class="btn btn-primary btn-sm">Voltar</a>
        </div>

        <h3>Lista de Usuários</h3> <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome Usuário</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nivel</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tr>
                <?php
                include 'conexao.php';
                $sql = "SELECT*FROM usuarios WHERE status = 'Inativo' ";
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {

                    $idUsuario = $array['idUsuario'];
                    $nomeUsuario = $array['nomeUsuario'];
                    $email = $array['email'];
                    $nivel = $array['nivel'];


                    ?>
            <tr>
                <td> <?php echo $nomeUsuario ?> </td>
                <td> <?php echo $email ?> </td>
                <td> <?php echo $nivel ?></td>

                <!-- ?id= echo $idEstoque e $nivel para enviar metodo GET para página editarProdutos -->
                <td>
                    <a class="btn btn-success btn-sm" href="php/aceitarUsuario.php?id=<?php echo $idUsuario ?>&nivel=1" role="button">Administrador</a>

                    <a class="btn btn-warning btn-sm" href="php/aceitarUsuario.php?id=<?php echo $idUsuario ?>&nivel=2" role="button">Funcionário</a>

                    <a class="btn btn-dark btn-sm" href="php/aceitarUsuario.php?id=<?php echo $idUsuario ?>&nivel=3" role="button">Conferente</a>

                    <a class="btn btn-danger btn-sm" href="php/deletarUsuario.php?id=<?php echo $idUsuario ?>" role="button">Excluir</a>
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
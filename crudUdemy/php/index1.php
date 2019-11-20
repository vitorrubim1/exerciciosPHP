<!doctype html>
<html lang="pt-br">

<head>
    <title>Erro ao logar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    include '../conexao.php';
    include '../script/password.php';

    //Resgate do usuario e senha
    $usuario = $_POST['usuario'];
    $senhaUsuario = $_POST['senha'];

    // Comando SQL e conexão com BD
    $sql = "SELECT email, senha FROM usuarios WHERE email = '$usuario' AND status ='Ativo' ";
    $buscar = mysqli_query($conexao, $sql);

    //para fazer a verificação de linhas existentes
    $total = mysqli_num_rows($buscar);

    while ($array = mysqli_fetch_array($buscar)) {


        //Puxando a senha codificada do banco, para fazer comparação
        $senha = $array['senha'];

        /* VAI CODIDIFICAR A SENHA DIGITADA PELO USUÁRIO, GUARDAR NA VÁRIAVEL '$senhaDecodificada'
        E FAZER A COMPARAÇÃO COM A QUE ESTÁ NO BANCO DE DADOS*/
        $senhaDecodificada = sha1($senhaUsuario);

        if ($total > 0) {
            //conferir senha

            if ($senhaDecodificada == $senha) {
                
                session_start();
                $_SESSION['usuario'] = $usuario;
                header('Location:../menu.php');

            } else {
                header('Location:../erro.php');
            }
        } else {
            header('Location:../erro.php');
        }
    }
    ?>
    <!-- jQuery and JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
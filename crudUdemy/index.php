<!doctype html>
<html lang="pt-br">

<head>
    <title>Tela de Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <div class="container" id="containerLogin" style="">
        <center>
            <img src="img/cadeado.png" width="150px" height="150px">
        </center>
        <form action="php/index1.php" method="post">
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="usuario" class="form-control" placeholder="Usuário:" autocomplete="off" required>
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Senha:" autocomplete="off" required>
            </div>

            <div style="text-align: right">
                <button type="submit" id="btnLogin" class="btn btn-sm btn-success">Entrar</button>
            </div>
        </form>
    </div>

    <div style="margin-top: 10px">
        <center>
            <small>Você não possui Cadastro? clique <a href="cadastroUsuarioExterno.php">Aqui!</a> </small>
        </center>
    </div>




    <!-- jQuery, JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
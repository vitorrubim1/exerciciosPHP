<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <div class="container" style="width:400px; margin-top:30px;">
        <div style="text-align: right">
            <a href="index.php" role="button" class="btn btn-sm btn-dark">Voltar</a>
        </div>


        <h4>Cadastro de usuário.</h4>
        <form action="php/inserirUsuarioExterno.php" method="post">
            <div class="form-group">
                <label>Nome do Usuário</label>
                <input type="text" class="form-control" name="nomeUsuario" placeholder="Nome completo:" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Seu melhor E-mail:" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" id="txtSenha" class="form-control" name="senha" placeholder="Senha:" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Repita sua Senha</label>
                <input type="password" oninput="validaSenha(this)" class="form-control" name="senha2" placeholder="Repita sua Senha:" autocomplete="off" required>
                <small style="color:#737373; text-align: right" >As senhas precisam se coincidir.</small>
            </div>
           
            <div style="text-align:right">
                <button class="btn btn-sm btn-success" type="submit">Cadastrar </button>
            </div>
        </form>
    </div>
    <!-- jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!--Script para validação de Senhas-->
    <script>
        function validaSenha(input) {
            if (input.value != document.getElementById('txtSenha').value) {
                input.setCustomValidity('Repita a Senha corretamente!');
            } else {
                input.setCustomValidity('');
            }
        }
    </script>
</body>

</html>
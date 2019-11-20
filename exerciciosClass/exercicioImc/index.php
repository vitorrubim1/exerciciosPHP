<!doctype html>
<html lang="en">

<head>
    <title>IMC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container"><br>
        <h3>Calculo de IMC</h3>
        <form action="processaIndex.php" method="post">
            <div class="form-group">

                <input type="name" name="nome" class="form-control" placeholder="Digite seu nome:"> <br>

                <input type="number" name="altura" class="form-control" placeholder="Digite sua altura:">
                <small class="form-text text-muted">APENAS NÚMERO</small> <br>

                <input type="number" name="peso" class="form-control" placeholder="Digite seu peso:">
                <small class="form-text text-muted">APENAS NÚMERO</small> <br>

                <select class="form-control" name="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select> <br>

                <button type="submit" class="btn btn-dark" role="button"> Enviar</button>

            </div>

        </form>
    </div>


    <!-- jquery e js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
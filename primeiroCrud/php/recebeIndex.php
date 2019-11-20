<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    /*para ocutar mensagem de WARNING error_reporting(0); */

    require_once('conexao.php');    //INCLUINDO A CONEXÃO

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $estado = $_POST['estado'];
    $dataNascimento = $_POST['dataNascimento']; 
    $sexo = $_POST['sexo']; 

    
    if (!$conexao) {
        die(" Falha na Conexão bro! " . mysqli_connect_error());
    }

    $query = ("INSERT INTO cliente (nome, email, dataNascimento, estado, sexo) VALUES ('$nome', '$email', '$dataNascimento', '$estado', '$sexo' )");

    if (mysqli_query($conexao, $query)) {
        
        echo   "<script> 
                     alert ('Funcionário cadastrado com Sucesso!!!');
                     location.href='../index.php';
                </script>";   
       
       
        
    } else {
        echo " Erro: " . $query . "</br>" . mysqli_error($conexao);
    }
    mysqli_close($conexao);
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<!--
     echo 
        
-->
</html>

<div class=".alert-success"> <strong>Excluído com Sucesso! </strong>  </div> 






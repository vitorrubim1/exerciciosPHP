<?php
include '../conexao.php';
include '../script/password.php';

$nomeUsuario = $_POST['nomeUsuario'];   
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel = $_POST['nivelUsuario'];
$status = 'Ativo';

$sql = "INSERT INTO usuarios(nomeUsuario, email, senha, nivel, status) 
        VALUES('$nomeUsuario','$email', sha1('$senha'), $nivel,'$status')";

//print_r ($sql); exit();


$inserir = mysqli_query($conexao, $sql);

?>


<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 400px">
    <div class="alert alert-success" role="alert" style="margin-top:20px">
        Usuário adicionado com Sucesso!
    </div>
    <a class="btn btn-sm btn-secondary" href="../cadastroUsuario.php" role="button">Voltar</a>

</div>
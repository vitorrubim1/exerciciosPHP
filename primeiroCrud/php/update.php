<?php
	require_once 'conexao.php';

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$estado = $_POST['estado'];
	$dataNascimento = $_POST['dataNascimento'];
    $sexo = $_POST['sexo'];
    $id = $_POST['id'];

	//echo $id; exit;

	$query = "UPDATE cliente SET nome = '$nome', email = '$email', estado = '$estado',
    dataNascimento = '$dataNascimento', sexo = '$sexo'  WHERE idCliente = $id";

     //Executando o comando de UPDATE
	$exe = mysqli_query($conexao, $query);
	if($exe == 1){

        echo "<script>
                alert('Dado Atualizado');
                location.href='editData.php'
             </script>";
        
	}else{

		echo "<script>alert ('Deu ruim') <script>";
	}
?>

<?php
	require 'conexao.php';
	$id = $_GET['id'];

    $conn = new Conn();
    $query = "DELETE FROM funcionario WHERE id_funcionario=:id";

    $resultado = $conn->getConn()->prepare($query);
    $resultado->bindParam(':id', $id);

    if ($resultado->execute()){
	   echo "<script>alert('Dados excluidos com sucesso'); location.href='index.php'</script>";
	}else{
		echo "<script>alert('Deu merda com sucesso'); location.href='index.php'</script>";
	}
?>
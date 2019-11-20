<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <h1>Editar Usuário</h1>
        <a href="index.php">Listar</a><br><br>
        <?php
        require 'conexao.php';
        $conn = new Conn();
		
        if (isset($_POST['editar'])){
            $query = "UPDATE funcionario SET nome=:nome, cpf=:cpf, sexo=:sexo, observacoes=:observacoes WHERE id_funcionario=:id_funcionario";
            //echo $query;exit;
			$resultado = $conn->getConn()->prepare($query);
            $resultado->bindParam(':nome', $_POST['nome']);
            $resultado->bindParam(':cpf', $_POST['cpf']);
            $resultado->bindParam(':sexo', $_POST['sexo']);
            $resultado->bindParam(':observacoes', $_POST['observacoes']);
            $resultado->bindParam(':id_funcionario', $_POST['id']);
         
             if ($resultado->execute()){
			   echo "<script>alert('Dados editados com sucesso'); location.href='listar.php'</script>";
			}else{
				echo "<script>alert('Deu merda com sucesso'); </script>";
			}
        }

        //Pesquisado os dados do usuario
        $id = $_GET["id"];        
		$query = "SELECT * FROM funcionario WHERE id_funcionario=:id";
        $resultado = $conn->getConn()->prepare($query);
        $resultado->bindParam(':id', $id, PDO::PARAM_INT);
        $resultado->execute();
        $lista = $resultado->fetch(PDO::FETCH_ASSOC);
        ?>

        <form name="EditUsuario" action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $lista['id_funcionario']; ?>">

            <label>Nome: </label>   
            <input type="text" name="nome" value="<?php echo $lista['nome']; ?>"><br><br>

            <label>CPF: </label>   
            <input type="text" name="cpf"  value="<?php echo $lista['cpf']; ?>"><br><br>

            <label>Sexo: </label>   
            <input type="text" name="sexo" value="<?php echo $lista['sexo']; ?>"><br><br>

            <label>Observações: </label>   
            <textarea name="observacoes"><?php echo $lista['observacoes']; ?></textarea><br><br>

            <input type="submit" value="Editar" name="editar">
        </form>
    </body>
</html>

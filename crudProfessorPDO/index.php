<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Funcionários</title>
    </head>
    <body>
        <h1>Cadastrar usuário</h1>
        <a href="listar.php">Listar</a><br><br>
        <?php
        require_once 'conexao.php';

        if (isset($_POST['enviar'])){
			
            $conn = new Conn();

            $query = "INSERT INTO funcionario (nome, cpf, sexo, observacoes) VALUES (:nome, :cpf, :sexo, :observacoes)";
           // echo $result_cadastrar;exit;
			$cadastrar = $conn->getConn()->prepare($query);

            $cadastrar->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);
            $cadastrar->bindParam(':cpf', $_POST['cpf'], PDO::PARAM_INT);
            $cadastrar->bindParam(':sexo', $_POST['sexo'], PDO::PARAM_STR);
            $cadastrar->bindParam(':observacoes', $_POST['observacoes'], PDO::PARAM_STR);

            $cadastrar->execute();

            if ($cadastrar->rowCount()){
                echo "<script>alert('Dados inseridos com sucesso'); location.href='index.php'</script>";
			}else{
				echo "<script>alert('Deu merda com sucesso'); </script>";
			}
        }
        ?>        
        <form action="" method="POST">
            <label>Nome: </label>   
            <input type="text" name="nome"><br><br>

            <label>CPF: </label>   
            <input type="text" name="cpf"><br><br>

            <label>Sexo: </label>   
				<select name="sexo">
					<option value="F">Feminino</option>
					<option value="M">Masculino</option>
				</select>
			<br><br>

            <label>Observações: </label>   
			<textarea name="observacoes"></textarea><br><br>

            <input type="submit" value="Cadastrar" name="enviar">
        </form>
    </body>
</html>













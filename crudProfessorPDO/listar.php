<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <h1>Usuários</h1>
        <a href="index.php">Cadastrar</a><br><br>
        
        <?php
        
        require_once 'conexao.php';

        $conn = new Conn();
        $query = "SELECT * FROM funcionario";

        $resultado = $conn->getConn()->prepare($query);
        $resultado->execute();

        while ($listar = $resultado->fetch(PDO::FETCH_ASSOC)){
            echo "Nome: " . $listar['nome'] . "<br>";
            echo "CPF: " . $listar['cpf'] . "<br>";
            echo "Sexo: " . $listar['sexo'] . "<br>";
            echo "Observações: " . $listar['observacoes'] . "<br><br><br>";
			
            //url dinamica, passando id 
            echo "<a href='visualizar.php?id=" . $listar['id_funcionario'] . "'>Visualizar</a><br>";
            echo "<a href='editar.php?id=" . $listar['id_funcionario'] . "'>Editar</a><br>";
            echo "<a href='apagar.php?id=" . $listar['id_funcionario'] . "'>Apagar</a><br>";
            echo "<hr>";
        }
        ?>
    </body>
</html>

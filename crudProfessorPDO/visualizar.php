<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <h1>Visualizar usuário</h1>
        <a href="listar.php">Listar</a><br><br>
        <?php
        require 'conexao.php';
        
        $id = $_GET["id"];
        $conn = new Conn();
        $query = "SELECT * FROM funcionario WHERE id_funcionario=:id";
        
        $resultado = $conn->getConn()->prepare($query);
        //preparando a variavel id  
        $resultado->bindParam(':id', $id, PDO::PARAM_INT);
        $resultado->execute();
        
        $lista = $resultado->fetch(PDO::FETCH_ASSOC);
        echo "Nome: " . $lista['nome'] . "<br>";
        echo "CPF: " . $lista['cpf'] . "<br>";
        echo "Sexo: " . $lista['sexo'] . "<br>";
        echo "Observações: " .$lista['observacoes'] . "<br>";
        
        ?>
    </body>
</html>

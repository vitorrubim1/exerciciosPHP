<?php
require_once 'conexao.php';
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>a </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <?php
        $query = "SELECT * FROM cliente";
        $exe = mysqli_query($conexao, $query);
    ?>


    <table class='table table-md table-hover'>
        <caption>Lista de Funcionários</caption>
        <thead>
            <tr>
                <th scope='col'>ID</th>
                <th scope='col'>NOME</th>
                <th scope='col'>E-MAIL</th>
                <th scope='col'>ESTADO</th>
                <th scope='col'>DATA DE NASCIMENTO</th>
                <th scope='col'>SEXO: </th>
                <th scope='col'>ATUALIZAR</th>
                <th scope='col'>VOLTAR</th>
            </tr>
        </thead>
        <tbody>
            

            <?php
            while ($dados = mysqli_fetch_array($exe)) {

                echo "
        <form action='update.php' method='post'>
            <tr>
                <th scope='row disable'> $dados[idCliente] </th>
				<td> <input type='text' class='form-control' name='nome' value='$dados[nome]'/> </td>
				<td> <input type='text' class='form-control' name='email' value='$dados[email]'/> </td>
                <td> <input type='text' class='form-control' name='estado' value='$dados[estado]'/> </td>
                <td> <input type='date' class='form-control' name='dataNascimento' value='$dados[dataNascimento]'/> </td>
                <td> <select class='form-control' name='sexo' value='$dados[sexo]'>
                        <option value='Masculino'> Masculino </option>
                        <option value='Feminino' > Feminino </option>
                     </select>
                </td>

                <td> <input type='submit' class='btn btn-danger' value='EDITAR'> </td>
                     <input type='hidden' name='id' value='$dados[idCliente]'/>
                     
                     <td> <a type='submit' class='btn btn-dark' href='../index.php'>VOLTAR </a> </td>   
            </tr>                     
        </form>
        
                 
      

                
            
            
            ";
            }
            ?>
             </tbody>


            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>




			
			
			
						
				
					

</html>


<!doctype html>
<html lang="pt-br">

<head>
  <title>Title</title>
  <meta charset="utf-8">

<body>

    <h1>Calculadora</h1>
    <form action="processaIndex.php" method="post">
      <input type="number" name="valor" placeholder="Digite o Valor:"> <br> <br>
      <input type="number" name="porcentagem" placeholder="Digite a Porcentagem:"> <br> <br>

      <label>Selecione uma operação:</label> <br>
      <select name="operacao">
        <option value="juros">Juros</option>
        <option value="desconto">Desconto</option>
        
      </select>

      <!-- Botão enviar -->
      <input type="submit" value="Enviar">
    </form>

</body> 

</html>
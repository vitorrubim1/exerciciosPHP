<!doctype html>
<html lang="pt-br">

<head>
  <title>Title</title>
  <meta charset="utf-8">

<body>

    <h1>Calculadora</h1>
    <form action="processaIndex.php" method="post">
      <input type="number" name="n1" placeholder="Digite o 1º Número:"> <br> <br>
      <input type="number" name="n2" placeholder="Digite o 2º Número:"> <br> <br>

      <label>Selecione uma operação:</label> <br>
      <select name="operacao">
        <option value="adicao">Adição</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
      </select>

      <!-- Botão enviar -->
      <input type="submit" value="Enviar">
    </form>

</body> 

</html>
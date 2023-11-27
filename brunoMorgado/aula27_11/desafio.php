<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabuada Dinâmica</title>

</head>

<body>

  <h2>Escolha um número para ver a tabuada:</h2>

  <form action="php_desafio.php" method="get">
    <label for="numero">Número:</label>
    <select name="numero" id="numero">
      <?php
      // Gerar as opções do select de 1 a 10
      for ($i = 1; $i <= 10; $i++) {
        echo "<option value='$i'>$i</option>";
      }
      ?>
    </select>
    <button type="submit">Mostrar Tabuada</button>
  </form>

</body>

</html>
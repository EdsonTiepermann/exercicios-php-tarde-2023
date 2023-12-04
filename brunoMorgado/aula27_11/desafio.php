<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabuada Dinâmica</title>

</head>

<body>

  <h2>Escolha um número para ver a tabuada:</h2>

  <form>
    <label for="num">Número:</label>
    <select name="num1" id="numero">
      <?php
      // Gerar as opções do select de 1 a 10
      for ($i = 1; $i <= 10; $i++) {
        echo "<option value='$i'>$i</option>";
      }
      ?>
    </select>
    <button onclick="verificacao()" id="btn-media">Mostrar Tabuada</button>
  </form>

  <script>
    function verificacao() {
      let num1 = document.getElementById('numero').value;
      alert(num1);
      window.open(`php_desafio.php?numero1=${num1}`)
    }
  </script>

</body>

</html>
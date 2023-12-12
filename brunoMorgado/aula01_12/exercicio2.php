<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 2</title>
</head>

<body>
  <form>
    <p>Digite o temperatura.</p>
    <input type="number" id="num3">
    <p>Digite pra qual temperatura voce quer converter.</p>
      <input type="radio" class="num1" name="temperatura" value="1">
      <label>Celsius</label><br>
    <input type="radio" class="num1" name="temperatura" value="2">
      <label>Farenheit</label><br>
    <br><button onclick="verificacao()" id="btn-media"> Verificar </button>
  </form>

  <script>
    function verificacao() {
      let num3 = document.getElementById('num3').value;
      let num1 = document.querySelector('input[name="temperatura"]:checked').value;

      window.open(`php_exercicio2.php?temperatura=${num3}&opcao=${num1}`)
    }
  </script>


</body>

</html>
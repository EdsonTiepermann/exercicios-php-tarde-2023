<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form>
    <p>Digite 3 numeros.</p>
    <input type="number" id="num1">
    <input type="number" id="num2">
    <input type="number" id="num3">
    <button onclick="verificacao()" id="btn-media"> Verificar </button>
  </form>

  <script>
    function verificacao() {
      let num1 = document.getElementById('num1').value;
      let num2 = document.getElementById('num2').value;
      let num3 = document.getElementById('num3').value;
      window.open(`php_exercicio1.php?numero1=${num1}&numero2=${num2}&numero3=${num3}`)
    }
  </script>


</body>

</html>
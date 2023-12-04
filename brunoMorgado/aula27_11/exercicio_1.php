<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form>
    <p>Digite um numero para saber o seu fatorial?</p>
    <input type="number" id="num1">
    <button onclick="verificacao()" id="btn-media"> Verificar </button>
  </form>

  <script>
    function verificacao() {
      let num1 = document.getElementById('num1').value;
      alert(num1);
      window.open(`php_exercicio_1.php?numero1=${num1}`)
    }
  </script>


</body>

</html>
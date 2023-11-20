<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form>
    <input type="number" id="num1">
    <input type="number" id="num2">
    <input type="number" id="num3">
    <button onclick="crescente()" id="btn-crescente"> Verificar </button>
  </form>

  <script>
    function crescente() {
      let num1 = document.getElementById('num1').value;
      let num2 = document.getElementById('num2').value;
      let num3 = document.getElementById('num3').value;
      alert(num1);
      alert(num2);
      alert(num3);
      window.open(`php_exercicio3.php?numero1=${num1}&numero2=${num2}&numero3=${num3}`)
    }
  </script>


</body>

</html>
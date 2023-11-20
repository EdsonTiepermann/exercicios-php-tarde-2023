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
    <button onclick="hora()" id="btn-somar"> Verificar </button>
  </form>

  <script>
    function hora() {
      let num1 = document.getElementById('num1').value;
      alert(num1);
      window.open(`php_exercicio1.php?numero1=${num1}`)
    }
  </script>


</body>

</html>
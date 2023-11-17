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
  <button onclick="somar() " id="btn-somar"> Somar </button>
</form>

<script>
  function somar(){
    let num1 = document.getElementById('num1').value;
    let num2 = document.getElementById('num2').value;

    window.open(`calculo.php?numero1=${num1}&numero2=${num2}`)
  }

</script>
  
</body>
</html>
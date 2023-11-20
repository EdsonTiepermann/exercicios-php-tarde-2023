<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
    <input type="number" id="hora-digitada" placeholder="insira o horário">
    <button onclick="hora()" id="btn-hora">Exibir mensagem</button>
</form>


<script>
   function hora() {
        let num1 = document.getElementById('hora-digitada').value;
        window.open(`msg.php?numero1=${num1}`);
  }
</script>
</body>
</html>
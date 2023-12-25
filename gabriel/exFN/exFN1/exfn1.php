<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<input type="text" id="nome-digitado" placeholder="insira o seu nome completo">
    <button onclick="separar()" id="btn-separar">Exibir nome separado como array</button>

    <script>
         function separar() {
        let nome = document.getElementById('nome-digitado').value;
        window.open(`nomeseparado.php?nome=${nome}`);
  }
    </script>

</body>

</html>
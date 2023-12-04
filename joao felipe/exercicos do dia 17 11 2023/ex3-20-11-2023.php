<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" id="numeros" placeholder="insira os numeros">
<button onclick="selecionar()" id ="selecionar">Selecionar</button>
        
    </form>
</body>

<script>
    function selecionar() {
        let numeros = document.getElementById('numeros').value;
    }
</script>
</html>
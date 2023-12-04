<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota</title>
    <style>
    </style>
</head>
<body>
<form>
    <input type="number" id ="nota" placeholder ="digite aqui">
        <br>
    <input type="number" id="nota2" placeholder ="digite aqui">
        <button onclick="verificar()">Calcular nota</button>
    </form>
   


<script>
    function verificar() {
        var nota = document.getElementById('nota').value;
        var nota2 = document.getElementById('nota2').value;

        window.open(`recebeEX.php?nota1=${nota}&nota2=${nota2}`)
        
    
        }
</script>
    
</body>
</html>
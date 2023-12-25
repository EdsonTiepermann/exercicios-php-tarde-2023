<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

?>
<form>
    <input type="number" id="primeiranota" placeholder="insira a nota 1">
    <input type="number" id="segundanota" placeholder="insira nota 2">
    <button onclick="media()" id="btn-media">Calcular média</button>
</form>
<script>
        function media(){
        let nota1 = document.getElementById('primeiranota').value;
        let nota2 = document.getElementById('segundanota').value;
        window.open(`resultado.php?nota1=${nota1}&nota2=${nota1}`);
    }
</script>
</body>
</html>
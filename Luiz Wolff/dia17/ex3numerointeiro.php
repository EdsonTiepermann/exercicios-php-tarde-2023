<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero inteiro</title>
</head>
<body>
    <input type="number" id="n1" placeholder="digite">
    <input type="number" id="n2" placeholder="digite">
    <input type="number" id="n3" placeholder="digite">
    <button onclick="ver()">Verificar</button>


<script>
    function ver() {
        var n1= document.getElementById('n1').value;
        var n2= document.getElementById('n2').value;
        var n3= document.getElementById('n3').value;


        window.open(`recebeEX.php?n1=${n1}&n2=${n2}&n3=${n3}`);


        
    }
</script>
    
    
</body>
</html>
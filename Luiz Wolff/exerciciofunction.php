<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="number" id="n1">
    <input type="number" id="n2">
    <input type="number" id="n3">

    <button onclick="envia()">Verificar numeros</button>

    <script>
        function envia() {
        var num1 = document.getElementById('n1').value;
        var num2 = document.getElementById('n2').value;
        var num3 = document.getElementById('n3').value;
alert(num1)
        if (num1 == "") {
            alert("teste")
        }


        window.open(`recebefunction.php?n1=${num1}&n2=${num2}&n3=${num3}`)
    }
    
        
    </script>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="number" id="n1">
    <button onclick="fatorial()">Verificar fatorial</button>


    <script> 
    function fatorial() {
        var n = document.getElementById('n1').value;
        window.open(`recebefatorial.php?n1=${n}`)
        
    }
       
    </script>
    
</body>
</html>
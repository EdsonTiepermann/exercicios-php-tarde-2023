<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background:red;
        text-align:center;
        padding:100px;
    }
    label{
        font-family:helvetica;
        color:white;
    }
    </style>
</head>
<body>
    <label>Nome completo:</label>
    <input type="text" id="Nome">
    <br>
    <button onclick="maiuscula()">Escolher em maiúsculas</button>
    <br>
    <br>
    <button onclick="minuscula()">Escolher em minúsculas</button>

    <script>
        function maiuscula() {
            var nome = document.getElementById("Nome").value;
            window.open(`recebenome.php?nome1=${nome}`)
            
        }
        function minuscula() {
            var nome = document.getElementById("nome2").value;
            window.open(`recebenome2.php?nome1=${nome}`)
            
        }
    </script>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<input type="text" id="nome-completo" placeholder="insira seu nome completo">
<button onclick="maiuscula()" id="btn-maiuscula">Deixar nome em maiusculas</button>
<button onclick="minuscula()" id="btn-minuscula">Deixar nome em minúsculas</button>

<script>

let nome1 = document.getElementById('nome-completo').value;

function maiuscula() {
        window.open(`caixaalta.php?nome1=${nome1}`);
        }
function minuscula() {
        window.open(`letraminuscula.php?nome1=${nome1}`);
        }


</script>

</body>
</html>
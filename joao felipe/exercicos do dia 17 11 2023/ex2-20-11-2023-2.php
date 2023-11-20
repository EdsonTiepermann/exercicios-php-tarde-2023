<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="number" id="notas" placeholder="inserir notas">
        <button onclick="verificar()" id="conferir">verificar</button>
    </form>
</body>

<script>
    function verificar() {

        let vrfnotas = document.getElementById('notas').value;

        window.open(`ex2-20-11-2023.php?notas=${notas}`);
    }
</script>
</html>
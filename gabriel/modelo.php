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
    <input type="number" id="num1" placeholder="insira o num1">
    <input type="number" id="num2" placeholder="insira o num1">
    <button onclick="somar()" id="btn-somar">Somar</button>
</form>
<script>
    function somar(){
        let num1 = document.getElementById('num1').value;
        let num1 = document.getElementById('num2').value;
        window.open(`./calculo.php?numero1=${num1}&numero2=${num2}`);
        alert(num1)
    }
</script>
</body>
</html>
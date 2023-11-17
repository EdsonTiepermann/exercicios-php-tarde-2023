<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
<input type="number" id="num1" placeholder="numero 1">
<input type="number" id="num2" placeholder="numero 2">
<button onclick="somar()" id ="btn-somar">Somar</button>
</form>

    

</body>

<script>

    function somar(){
        let num1 = document.getElementById('num1').value;
        let num2 = document.getElementById('num2').value;

        window.open(`molde2.php?numero1=${num1}&numero2=${num2}`)
        // alert(num1)
    }
</script>
</html>
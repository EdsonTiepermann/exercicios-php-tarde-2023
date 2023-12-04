<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="number" id ="num1" placeholder ="digite aqui">
        <br>
        <input type="number" id="num2" placeholder ="digite aqui">
        <button onclick="somar()">Somar</button>
    </form>

    <script>
        function somar(){
            var num1 = document.getElementById('num1').value;
            var num2 = document.getElementById('num2').value;

           window.open(`segundoarquivo.php?numero1= ${num1}&numero2=${num2}`)
            alert(num1)
            
            
        }
        

    </script>
 


</body>
</html>
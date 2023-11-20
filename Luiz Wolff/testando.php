<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
    <input type="text" id="login">
    <input type="text" id="senha">
    <button onclick="login1()">Fazer login</button>
</form>

    <script>
        function login1(){
            var login = document.getElementById('login').value
            var senha = document.getElementById('senha').value
            window.open(`segundoarquivo.php?login1=${login}&login2=${senha}`)
            if (login == 'luiz' && senha =='luiz2003') {
            alert('Acesso permitido')
            
        } else {
            alert('erro')
            
        }
        }

        
    </script>
    
</body>
</html>
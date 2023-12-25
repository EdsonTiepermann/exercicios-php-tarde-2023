<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" id="codigo">
    <button onclick="codigo()">Verificar código</button>

    <h2>100 Cachorro quente R$ 12,70</h2>
    <h2>101 Bauru Simples R$ 4,00</h2>
    <h2>102 Bauru com ovo R$ 4,60</h2>
    <h2>103 Hambúrguer R$ 15,00</h2>
    <h2>104 Cheeseburger R$ 13,50</h2>
    <h2>05 Refrigerante R$ 4,50</h2>

    <script>

      function codigo() {
        var cod = document.getElementById('codigo').value;
        window.open(`recebeLanchonete.php?codigo1=${cod}`)
        
      }



        
    </script>
    
</body>
</html>
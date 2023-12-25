<?php
$num1 = 3;
$num2 = 1;

$operação = '-';



switch ($operação) {
    case '+':
        $soma = $num1 + $num2;
        echo " o resultado é <p> <h1>$soma</h1>";
        break;
    case '-':
        $soma = $num1 - $num2;
        echo " o resultado é <p> <h1>$soma</h1>";
        break;
    case '*':
        $soma = $num1 * $num2;
        echo " o resultado é <p> <h1>$soma</h1>";
        break;
    case '/':
        $soma = $num1 / $num2;
        echo " o resultado é <p> <h1>$soma</h1>";
        break;
    
    default:
        if (empty($operação)) {
            echo "nenhuma operação escolhida";
        }
        break;
};


?>








































<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="number" id="n1">
    <input type="number" id="n2">
     <button onclick="somar()" name="op" value ="+"> +</button>
        <button name= "op" value ="-"> -</button>
        <button name= "op" value ="*">*</button>
        <button name= "op" value ="/"> /</button>



-->












     <!-- <script>
       


        function somar(){
            var n1 = document.getElementById('n1').value;
            var n2 = document.getElementById('n2').value;
            var op = document.getElementsByTagName('op');
             window.open(`
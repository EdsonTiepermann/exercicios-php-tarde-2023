<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>
<body>
   <form action="" method="post" >
      Primeiro Numero: <input name="num1" type="text"><br>
      Segundo numero: <input name="num2" type="text"><br>
      <input type="submit" name="operacao" value="+">     
      <input type="submit" name="operacao" value="-">     
      <input type="submit" name="operacao" value="*">     
      <input type="submit" name="operacao" value="/">     
   </form> 
<?php

   $a = $_GET['num1'];
   $b = $_GET['num2'];
   $op= $_GET['operacao'];

   if( !empty($op) ) {
      if($op == '+')
      $op2 =   $a + $b;
      else if($op == '-')
      $op2 =  $a - $b;
      else if($op == '*')
      $op2 =  $a*$b;
      else
       $a/$b;

      echo "O resultado: $op";
   }

?>       
</body>
</html>
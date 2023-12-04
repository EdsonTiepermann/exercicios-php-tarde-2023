<?php
function somar($num1, $num2, $num3) {
    $result = $num1 + $num2 + $num3;
    return $result;  
}

$n1 = $_GET['n1'];
$n2= $_GET['n2'];
$n3 = $_GET['n3'];

if (!empty($n1) && !empty($n2)  && !empty($n3)) {
    echo somar($n1, $n2,$n3);
} else {
    echo "Um ou mais valores nao foram informados";
}

?>
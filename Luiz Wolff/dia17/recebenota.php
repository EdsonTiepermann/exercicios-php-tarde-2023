
 <!--


// $nota = $_GET['nota1'];
// $nota2 = $_GET['nota2'];

// $media = $nota+ $nota2 /2;
// if ($media >= 60) {
//     echo'Aprovado';
// }
//  else if($media < 60) {
//     echo "Reprovado:";

// }
// else if($media == 100) {
//     echo "Aprovado com distinção: $media";
// }
// ?>  -->





 
<?php
$nu1 = $_GET["n1"];
$nu2 = $_GET["n2"];
$nu3 = $_GET["n3"];

if ($nu1 > $nu2) {
    $aux = $nu1;
    $nu1 = $nu2;
    $nu2 = $aux;
}
if ($nu1 > $nu3) {
    $aux = $nu1;
    $nu1 = $nu3;
    $nu3 = $aux;
}
if ($nu2 > $nu3) {
    $aux = $nu2;
    $nu2 = $nu3;
    $nu3 = $aux;
}

 echo "aqui : $nu1 $nu2 $nu3";
 ?>







 
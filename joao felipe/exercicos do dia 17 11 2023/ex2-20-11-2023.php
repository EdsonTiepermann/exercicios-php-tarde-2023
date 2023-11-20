<?php
$nota = $_GET['notas'];
if($nota >= 6 ) {
    echo 'Aprovado!';   
} else if ($nota < 6 ) {
    echo 'Reprovado'; 
} else if ($nota == 10) {
  echo 'Aprovado com distinção ';
}

?>
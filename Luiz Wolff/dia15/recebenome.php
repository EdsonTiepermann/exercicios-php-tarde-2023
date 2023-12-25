<?php
$nome2 = $_GET['nome1'];

function nomeM($nome) {
    $nome = strtoupper($nome);
    return $nome;
    
}
function nome($nome) {
    $nome = strtolower($nome);
    return $nome;
}
if ($nome2 == "Luiz fernando" ) {
    echo  nomeM($nome2);
}
// if ($nome1 == "Luiz fernando" ) {
//     echo "<br>".nome($nome1);
// }
?>
<?php
$numero = $_GET['numero1'];

$hora = $numero;

if ($numero <= 12 ) {
    echo "bom dia";
} elseif ($numero <= 18) {
    echo "boa tarde";
} else {
    echo "boa noite";
}
?>
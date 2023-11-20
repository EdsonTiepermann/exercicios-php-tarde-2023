<?php
$numero1 = $_GET["numero1"];

if ($numero1 <= 12) {
  echo "Bom dia";
} else 
if ($numero1 > 12 && $numero1 <= 18) {
  echo "Boa tarde";
} else if ($numero1 > 18 && $numero1 <= 24) {
  echo "Boa noite";
} else {
  echo "Erro";
}

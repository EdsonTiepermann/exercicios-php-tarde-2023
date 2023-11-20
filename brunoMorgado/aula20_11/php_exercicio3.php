<?php
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];
$numero3 = $_GET["numero3"];

if ($numero1 <= $numero2 && $numero1 <= $numero3) {
  if ($numero2 <= $numero3) {
    echo "Números em ordem crescente: $numero1, $numero2, $numero3";
  } else {
    echo "Números em ordem crescente: $numero1, $numero3, $numero2";
  }
} elseif ($numero2 <= $numero1 && $numero2 <= $numero3) {
  if ($numero1 <= $numero3) {
    echo "Números em ordem crescente: $numero2, $numero1, $numero3";
  } else {
    echo "Números em ordem crescente: $numero2, $numero3, $numero1";
  }
} else {
  if ($numero1 <= $numero2) {
    echo "Números em ordem crescente: $numero3, $numero1, $numero2";
  } else {
    echo "Números em ordem crescente: $numero3, $numero2, $numero1";
  }
}

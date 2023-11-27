<?php
$numero1 = $_GET["numero1"];

function calcularFatorial($numero1)
{
  $fatorial = 1;

  // Certifique-se de que o número é não negativo
  if ($numero1 < 0) {
    return "O fatorial não está definido para números negativos.";
  }

  // Calcula o fatorial usando um loop for
  for ($i = $numero1; $i > 1; $i--) {
    $fatorial *= $i;
  }

  return $fatorial;
}

// Exemplo de uso
$resultado = calcularFatorial($numero1);
echo "O fatorial de $numero1 é $resultado.";

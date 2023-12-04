<?php


// Verificar se o número foi passado na URL
if (isset($_GET["numero1"])) {
  // Obter o número escolhido pelo usuário
  $numero1 = $_GET["numero1"];
  // Mostrar a tabuada do número escolhido
  echo "<h2>Tabuada do $numero1</h2>";
  echo "<table>";
  echo "<tr><th>Multiplicador</th><th>Resultado</th></tr>";

  for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero1 * $i;
    echo "<tr><td>$numero1 x $i = </td><td>$resultado</td></tr>";
  }

  echo "</table>";
} else {
  echo "<p>Selecione um número para ver a tabuada.</p>";
}

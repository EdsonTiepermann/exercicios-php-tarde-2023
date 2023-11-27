<?php
// Verificar se o número foi passado na URL
if (isset($_GET["numero"])) {
  // Obter o número escolhido pelo usuário
  $numero = $_GET["numero"];

  // Mostrar a tabuada do número escolhido
  echo "<h2>Tabuada do $numero</h2>";
  echo "<table>";
  echo "<tr><th>Multiplicador</th><th>Resultado</th></tr>";

  for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "<tr><td>$numero x $i = </td><td>$resultado</td></tr>";
  }

  echo "</table>";
} else {
  echo "<p>Selecione um número para ver a tabuada.</p>";
}

<?php

$opcao = $_GET["opcao"];
$temperatura = $_GET["temperatura"];

if ($opcao == 2) {

  // Função para converter de Celsius para Fahrenheit
  function celsiusParaFahrenheit($temperatura)
  {
    return ($temperatura * 9 / 5) + 32;
  }

  $fahrenheit = celsiusParaFahrenheit($temperatura);

  echo "A temeporada em Fahrenheit é : ", $fahrenheit;
} else if ($opcao == 1) {
  // Função para converter de Fahrenheit para Celsius
  function fahrenheitParaCelsius($temperatura)
  {
    return ($temperatura - 32) * 5 / 9;
  }

  $celsius =  fahrenheitParaCelsius($temperatura);


  echo "A temperatura em Celsius é : ", $celsius;
}

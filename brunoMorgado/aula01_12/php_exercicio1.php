<?php

//Verificar se o numero passou na url
if (!empty($_GET["numero1"]) && !empty($_GET["numero2"]) && !empty($_GET["numero3"])) {
  // passo os numeros para php via get

  $numero1 = $_GET["numero1"];
  $numero2 = $_GET["numero2"];
  $numero3 = $_GET["numero3"];

  // Faco a funcao para somar as variaveis.
  function somar($numero1, $numero2, $numero3)
  {

    return $numero1 + $numero2 + $numero3;
  }
  // faco a outra funcao chamado a primeira para fazer a media
  function media($numero1, $numero2, $numero3)
  {
    $soma = somar($numero1, $numero2, $numero3);

    $media = $soma / 3;

    return $media;
  }

  $somaResult = somar($numero1, $numero2, $numero3);
  $mediaResult = media($numero1, $numero2, $numero3);
} else {
  echo "Faltou algum valor";
}
// Mostrar
echo "A soma dos 3 valores é :  ", $somaResult;
echo " <br> A media dos 3 valores é : ", $mediaResult;

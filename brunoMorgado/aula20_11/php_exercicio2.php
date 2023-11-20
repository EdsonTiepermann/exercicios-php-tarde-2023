<?php
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];


// Calcular a média
$media = ($numero1 + $numero2) / 2;

// Classificar a média usando switch
switch ($media) {
  case ($media >= 6 && $media < 10):
    $classificacao = 'Aprovado';
    break;
  case ($media < 6):
    $classificacao = 'Reprovado';
    break;
  case ($media == 10):
    $classificacao = 'Aprovado com Distinção';
    break;
  default:
    $classificacao = 'Erro';
}

// Exibir resultados
echo "Média: $media\n";
echo "Classificação: $classificacao\n";

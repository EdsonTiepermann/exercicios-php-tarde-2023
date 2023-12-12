<?php

// Anonymous functions, o paramentro não pega do escopo global
// exempo multiplos de 10

echo "Anonymous functions <br><br>";

$array = [10, 13, 15, 20, 25, 27, 29, 35, 40];

echo "<pre>";
print_r($array);
echo "<pre>";

$numeros = array_filter($array, function ($item) {
  return $item % 5 == 0;
});

echo "<br> multiplos <br>";
echo "<pre>";
print_r($numeros);
echo "<pre>";

//-------------------------------------------------------------------
// Arrow functions
// Basicamente simplifica a função anonima (caso simples)

echo "Arrow funcitons <br><br>";

$array = [10, 13, 15, 20, 25, 27, 29, 35, 40];

$numeros = array_filter($array, fn ($item) => $item % 5 == 0);

echo "<br> multiplos <br>";
echo "<pre>";
print_r($numeros);
echo "<pre>";

//--------------------------------------------------------------------
// Funções recursivas
echo "Recursiva <br><br>";

function dividir($numero)
{
  $result = $numero / 2;
  echo "$numero <br>";

  if (round($result) > 0) {
    dividir($result);
  }
}

dividir(50);
//----------------------------------------------------------------------------------------------------------------------------------------
//função número absoluto (num positivo)

echo "<br> Absoluto <br>";
$num = -9.5;

echo $num . "<br>";
echo abs($num);
//----------------------------------------------------------------------------------------------------------------------------------
//funcao pi
echo "<br><br> Pi <br>";

echo pi();

//-------------------------------------------------------------------------------------------------------------------------------
// função arredondar num para baixo
echo "<br><br> Arredondar num para baixo <br>";

$n = 2.8;
echo $n . "<br>";

echo floor($n);

echo "<br><br> Arredondar num para cima <br>";
$n2 = 3.34;
echo "<br>" . $n2 . "<br>";

echo ceil($n2);

echo "<br><br> Arrendondar <br>";
$n3 = 3.6;
echo "<br>" . $n3 . "<br>";
echo round($n3);

echo "<br><br> Arredondar casas decimais <br>";
$n4 = 3.653647;
echo "<br>" . $n4 . "<br>";
echo round($n4, 2);

$testePi = pi();
echo "<br>" . $testePi;
echo "<br>" . round($testePi, 4);

//--------------------------------------------------------------------------------------------------------------------------------
//função num aleatorio

echo "<br><br> numero aleatorio <br>";

$randomico = rand(98, 100);

echo $randomico;
//---------------------------------------------------------------------------------------------------------------------------------
// funçao num menor e maior do array
echo "<br><br> Número num maior <br>";

$nmaior = [3, 6, 8, 9, 10, 15, 25];

echo max($nmaior);

echo "<br><br> Número num menor <br>";

$nMenor = [2, 3, 6, 1, 10, 15, 25];

echo min($nMenor);

//--------------------------------------------------------------------------------------------------------------------
// função retirar espaços
echo "<br><br> Manipulação de string <br>";
echo "<br> Retirar espaços <br>";

$nomeComEspaco = "      Bruno     ";

echo "Com espaço teste <br> " . $nomeComEspaco;

$nomeSemEspaco = trim($nomeComEspaco);

echo "<br> sem espaço " . $nomeSemEspaco;
echo "<br> com espaço " . strlen($nomeComEspaco);
echo "<br> sem espaço " . strlen($nomeSemEspaco);

//--------------------------------------------------------------------------------------------------------------------
//função lower/uppter
echo "<br><br> lower case <br>";

$nome1 = "Bruno Morgado";

echo "<br>" . strtolower($nome1);
echo "<br><br> UPPER case <br>";

echo "<br>" . strtoupper($nome1);
//--------------------------------------------------------------------------------------------------------------------------
//funçao recuperar alguns carecteres
echo "<br><br> Escolher algumas strings <br>";

$nome2 = "Morgado";

echo "<br>" . $nome2;
echo "<br>" . substr($nome2, 1, 5);
echo "<br>" . substr($nome2, -5, 3);

//-------------------------------------------------------------------------------------------------------------------------------
// funcao recuperar alguns carecteres
echo "<br><br> Procurar algo na string <br>";

echo $posicao = strpos($nome2, 'g');

//--------------------------------------------------------------------------------------------------------------------------------
echo "<br><br> Transformar o nome no array <br>";

echo $nomeCompleto = "Bruno Alexandre Morgado<br>";
$nomeArray = explode(" ", $nomeCompleto);

print_r($nomeArray);

//------------------------------------------------------------------------------------------------------------------------------
echo "<br><br> Formatar numeros <br>";

$numeroFormatar = 2569.5555;
echo "<br>" . $numeroFormatar;
echo "<br>" . number_format($numeroFormatar, 2, ',', '.');

//-------------------------------------------------------------------------------------------------------------------------------
echo "<br><br> Contar quantas posicoes tem no array <br>";
$listaArray = [1, "Bruno", 211, "Odonto", "Lions"];
echo "Total : " . count($listaArray);

//-----------------------------------------------------------------------------------------------------------------------------
echo "<br><br> Diferença entre os arrays  <br>";
$listaAlunos = ["João", "Edson", "Rodrigo", "Odonto", "Lions"];
$alunosAprovados = ["João", "Edson"];

$reprovados = array_diff($listaAlunos, $alunosAprovados);
print_r($reprovados);
//---------------------------------------------------------------------------------------------------------------------------------
echo "<br><br> Filtrar algo no array  <br>";
// deve conter true or false

$numArray = [1, 112, 25, 36, 85];

$filtrados = array_filter($numArray, fn ($item) => $item < 86);

print_r($filtrados);
//-----------------------------------------------------------------------------------------------------------------------
//teste
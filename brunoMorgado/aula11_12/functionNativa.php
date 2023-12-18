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
echo "<br><br> alteração de array  <br>";
// não serve oara realizar filtros

$numArray = [1, 112, 25, 36, 85];

$resultado2 = array_map(function ($item) {
  return $item * 2;
}, $numArray);

print_r($resultado2);

//-----------------------------------------------------------------------------------------------------------------------------
echo "<br><br> Destruindo um array e montando uma string  <br>";

$arrayNomeCompleto = ["Bruno", "Alexandre", "Morgado"];

print_r($arrayNomeCompleto);

$string = implode("", $arrayNomeCompleto);

echo "<br><br> String Montada: $string";
//------------------------------------------------------------------------------------------------------------------------------
echo "<br><br> Removendo o ultimo intem do array  <br>";

$numArray = [1, 112, 25, 36, 85];

array_pop($numArray);

print_r($numArray);

//-------------------------------------------------------------------------------------------------------------------------------
echo "<br><br> Removendo o primeiro item do array  <br>";

$numArray = [1, 112, 25, 36, 85];

array_shift($numArray);

print_r($numArray);

//--------------------------------------------------------------------------------------------------------------------------------
echo "<br><br> Buscar algo no array  <br>";

$numArray = [1, 112, 25, 36, 85];

if (in_array(111, $numArray)) {
  echo "Tem";
} else {
  echo "Não tem";
}
//--------------------------------------------------------------------------------------------------------------------------------
echo "<br><br> Buscar algo no array se tiver retorna a posição  <br>";

$numArray = [1, 112, 25, 36, 85];

$pos = array_search(36, $numArray);

echo $pos;

//---------------------------------------------------------------------------------------------------------------------------------
echo "<br><br> Ordenação em ordem crescente  <br>";

$numArray = [1, 112, 25, 36, 85];

sort($numArray);

print_r($numArray);

//------------------------------------------------------------------------------------------------------------------------------
echo "<br><br> Ordenação em ordem descrescente  <br>";

$numArray3 = [1, 112, 90, 25, 36, 85];

asort($numArray3);

print_r($numArray3);

//-------------------------------------------------------------------------------------------------------------------------------
echo "<br><br> Ordenação em ordem descrescente  mantendo a chave <br>";

$numArray3 = [1, 112, 90, 25, 36, 85];

arsort($numArray3);

print_r($numArray3);
//---------------------------------------------------------------------------------------------------------------------------------
echo '<br> Array Map <br>';

function functionArrayMap($item)
{
  if ($item === "Edson") {
    return "{$item} - Professor da tarde. É o Edson";
  } elseif ($item === "Robinson") {
    return "{$item} - Professor da noite. Quebrou a caneca";
  } elseif ($item === "Felipe") {
    return "{$item} - Aluno da noite.";
  } elseif ($item === "Leonardo") {
    return "{$item} - Aluno da tarde, infiltrado na noite";
  }
}

$arrayParaMapear = array("Edson", "Robinson", "Felipe", "Leonardo");
echo "<pre>";
print_r(array_map("functionArrayMap", $arrayParaMapear));
echo "</pre>";

//----------------------------------------------------------------------------------------------------------------------------------

// echo "<br><br> Datas 01-01-1970";
// no geral se trabalha com milesegundos 01011970 (começam a contar em 1970)

date_default_timezone_set('America/Sao_Paulo');

echo '<br>';
echo time();
echo "<br>" . date('Y-m-d', time());
echo '<br>';

echo date('d-m-y H:i:s');

//-----------------------------------------------------------------------------------------------------------------------------------

echo "<br><br> Manipulando data, formato internacional";
echo "<br>";
$data = '2023-03-13';

echo "$data data de inicio do curso";
echo '<br>';

$milesegundos = strtotime($data);
echo $milesegundos;
echo '<br>';
echo date('d-m-y', $milesegundos);

echo '<br>';
echo '<br>';
//--------------------------------------------------------------------------------------------------------------------------------
echo "<br><br> Diferenca entre datas";
echo '<br>';

$dataHoje = time();

$difDatas = ($milesegundos - $dataHoje);

echo $dias = $difDatas;

echo "<br>" . $diasData = abs(floor($difDatas / (60 * 60 * 24)));
//---------------------------------------------------------------------------------------------------------------------------------

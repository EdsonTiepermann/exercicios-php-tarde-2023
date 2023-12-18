<?php
echo "<br><br> Contar quantas posições tem no array <br>";

$listaArray = [1, "Edson", 211, "Odonto", "Lions"];

echo "Total: ".count($listaArray);


//-----------------------------------

echo "<br><br> Diferença entre os arrays <br>";

$listaAlunos = ["João", "Edson", "Rodrigo", "Odonto", "Lions"];
$alunosReprovados = ["João", "Edson"];

$reprovados = array_diff ($listaAlunos, $alunosReprovados);

print_r($reprovados);


//------------------------------

$runArray = [1, 112, 25, 36, 85];

$filtrados = array_filter($runArray, fn($item) => < 86);

print_r($filtrados);

//-----------------------

echo"<br><br> Aleteração de array <br>";

$numArray = [1, 112, 25, 36, 85];

$resultado2 = array_map(function($item) {
    return $item * 2;

}, array: $numArray);

print_r($resultado2);

//------------------

echo"<br><br> Destruindo um array e fazendo uma string<br>";

$arrayNomeCompleto = ["Edson", "Luiz", "Tiepermann", "Junior"];

print_r ( $arrayNomeCompleto);

$string = implode( " ", $arrayNomeCompleto);

echo"<br><br> String montada: $string";

//-----------------

echo"<br><br> Remove o ultimo item do array <br>";

$numArray= [1, 112, 25, 25, 36, 85];

array_pop( $numArray);

print_r( $numArray);

//----------------------

echo"<br><br> Remove o primeiro item do array <br>";

$numArray= [1, 112, 25, 25, 36, 85];

array_shift($numArray);

print_r($numArray); 

//---------------------------

echo"<br><br> Buscar algo no array <br>";

$numArray= [1, 112, 25, 25, 36, 85];

if (in_array(77, $numArray)){
    echo"tem";
} else {
    echo"não tem";
}

//--------------------

echo"<br><br> Buscar algo no array se tiver retorna a posição<br>";

$numArray= [1, 112, 25, 25, 36, 85];

$pos = array_search(36, $numArray);

echo $pos;

//-------------------------

echo"<br><br> ordenar em ordem crescente <br>";

$numArray= [1, 112, 25, 25, 36, 85];

sort( $numArray);

print_r($numArray);

//----------------------

echo"<br><br> ordenar em ordem decrescente <br>";

$numArray= [1, 112, 25, 25, 36, 85];

rsort( $numArray);

print_r($numArray);

//---------------------------

echo"<br><br> ordenar em ordem crescente mantendo a chave<br>";

$numArray= [1, 112, 25, 25, 36, 85];

asort( $numArray);

print_r($numArray);

//----------------------

echo"<br><br> ordenar em ordem decrescente mantendo a chave<br>";

$numArray= [1, 112, 25, 25, 36, 85];

arsort( $numArray);

print_r($numArray);

//--------------------

echo "<br>ARRAY MAP<br>"
function functionArrayMap($item)
{
    if ($item === "Edson"){
        return "{$item} - Professor da tarde. É o Edson";
    } elseif (item === "Robinson") {
        return "{$item} - Professor da noite. Quebrou a caneca"
    } elseif (item === "Felipe") {
        return "{$item} Aluno da noite";
    } elseif (item === "Leonardo") {
        return "{$item} Aluno da tarde. Infiltrado na noite."
    }
    }

    $arrayParaMapear = array{"Edson", "Robinson", "Felipe", "Leonardo"};
    echo"<pre>";
    print_r(array_map( "functionArraMap", $arrayParaMapear));
    echo "</pre>";

    //------------------------------------------

    date_default_timezone_set('America/Sao_Paulo');

 echo .date('d-m-Y H:i:s');

 //-----


?>
<?php

// echo "anynymous functions <br><br>"

// $array = [10,13,15,20,25,27,29,35,40];

// echo "<pre>"; print_r ($array); echo "<pre>";

// $numeros = array_filter( $array , function ($item) {
//     return $item % 5 ==0;
    
// })


//$numeros = array_filter( $array , function ($item) => $item % 5 ==0){



    

///funçõen recursivas 
echo"recursiva <br> <br>";


function dividir ($numero) {
    $result = $numero/2;
    echo "$numero <br>";


    if (round($result) > 0) {
        dividir ($numero);

    }
}
dividir($numero);
//--------------------------------------------------
//Função número absoluto (num positivo)
echo "<br> Absoluto <br>";
$num = -9.5;
echo $num. "<br>";
echo abs($num);

//--------------------------------------------------------------------------------
//Função pi
echo"<br><br> pi <br>";
echo pi();
//---------------------------------------------------------------------------------------
//Função arredondaar núm p baixo

echo "<br><br> Arrendondar num para baixo <br>";

$numero = 2.8;
echo $numero."<br>";

echo floor($numero);

echo "<br><br> Arrendondar num para cima <br>";
$numero2 = 3.34;
echo "<br>".$numero2."<br>";

echo ceil($numero2);


echo "<br><br> Arrendondar <br>";
$numero3 = 3.6;
echo "<br> aqui".$numero3."<br>";
echo round($numero3);


echo"<br><br>  Arredondar casas decimais <br>";
$numero3 = 3.6;
echo "<br>".$numero3;
echo round($numero3);





//---------------------------------------------------
//Function num aleatório
echo"<br><br> Número aleatório <br>";

$numaleatorio= rand( 98, 10);
echo $numaleatorio;

//--------------------------------------------------------------------------
//Função num menor e maior do array
echo"<br><br> Número num Maior <br>";
$nmaior = [3,6 ,8,9,10,15,25];
echo max ($nmaior);


echo"<br><br> Número num Menor <br>";

$nmenor = [1,6 ,8,6,10,4,22];
echo min ($nmenor);

//-------------------------------------------------------------------
//Function retirar espaços
echo"<br><br> Manipulação de strings <br>";
echo"<br> Retirar espaços <br>";

$nomecomEspaço = "      Luiz";

echo "com espaço teste <br>". $nomecomEspaço;

$nomesemEspaço = trim($nomecomEspaço);

echo "sem espaço bla <br>".$nomesemEspaço;
echo "com espaço ".strlen( $nomecomEspaço);
echo "sem espaço ".strlen( $nomesemEspaço);

//---------------------------------------------------------------------------
//Função lower/upper
echo"<br><br> Lower case <br>";

$nome = "Luiz fernando";

echo"<br>".strtolower($nome);
echo "<br><br> UPPER case <br>";
echo"<br>".strtoupper($nome)."<br><br>";

//-------------------------------------------------------------
//Função escolher alguns carateres
$nome2 = "Luiz fernando";
echo "<br>". $nome2;
echo "<br>".substr($nome2, 1, 5);
echo "<br>".substr($nome2, -5, 3);
//-----------------------------
//Função Procurar alguns carateres
echo"<br><br> Procurar algo na string <br>";

echo $posicao = strpos($nome2,'e');
//----------------------------------------------------------
echo"<br><br> Transformar o nome no array <br>";

echo $nomecompleto = "Luiz Fernando Wolff";
$nomearray = explode ( " ", $nomecompleto);
print_r($nomearray);
//-----------------------------------------------------------
echo"<br><br> Formatar números <br>";

$numeroformatar = 2569.5555;
echo "<br". $numeroformatar;
echo"<br>". number_format($numeroformatar, 2 , ',', '.');
//----------------------------------------------
echo"<br><br> Contar quantas posiçôes tem no array <br>";

$listaArray = [1, "Edson", 211, "Odonto", " Lions"];

echo "Total; ".count ($listaArray);
//-------------------------------------------------------------------------
echo"<br><br> Diferença entre os arrays <br>";

$listaAlunos = ["João", "Edson", "Rodirgo", "luiz"];
$alunosaprovados = ["João", "Edson",];

$reprovados = array_diff($listaAlunos, $alunosaprovados);
print_r($reprovados);
//----------------------------------------------------------------------------------------
echo"<br><br> Filtrar algo no array <br>";
//deve conter true or false

$numArray = [1,112,25, 36, 85];

$filtrados = array_filter($numArray, fn($item) => $item < 86);



//  if ($item < 86) {
//     return true;
//  } else {
//     return false;
//  }
print_r($filtrados);

//});
 




















?>
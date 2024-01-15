# exercicios-php-tarde-2023
Repositório para os exercícios de php  tarde 2023

Exemplo de Exercício, soma de 2 números

no primiero arquivo esse script abaixo

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
    </head>
    <body>
        <form>
            <input type="number" placeholder="Num 1" id="num1">
            <input type="number" placeholder="Num 2" id="num2">

            <button onclick="soma()" type="submit">Calcular</button>
        </form>

        <script>

            function soma() {
                 var num1 = document.getElementById('num1').value;
                var num2 = document.getElementById('num2').value;

                    window.open(ex2.php?num1=${num1}&&num2=${num2});
            }

         </script>
    </body>
    </html>

-No segundo arquivo o script php abaixo

    <?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $result = 0;

    $result = $num1 + $num2;

    if ($result) {
        echo "O resultado eh: $result";
    }
    ?>

--------------------------------------------------------------------------
17-11-2023

1 - Desenvolva um script com mensagens de saudações. Crie uma variável para inserir um horário e a partir do horário realizar as verificações, se o horário for até as 12 horas, escreva Bom dia, se passar das 12 e for até as 18 horas escreva boa tarde e se passar das 18 horas até a 0 horas escreva boa noite (if else);

2 - Desenvolva um script que recebe duas notas de um aluno. Em seguida deve ser calcular a média do aluno e dar o seguinte resultado:
A mensagem "Aprovado", se a média alcançada for maior ou igual a seis;
A mensagem "Reprovado", se a média for menor do que seis;
A mensagem "Aprovado com Distinção", se a média for igual a dez. (switch case)

3 - Faça um script em PHP que leia três números inteiros e mostre eles na ordem crescente.

4 - Desenvolva um script calculadora com os 4 operadores somar, subtrair, dividir e multiplicar.

5 - O cardápio da lanchonete é dado pela tabela abaixo, insira na tela o código do produto, e retorno o produto e seu valor

    Código Produto Preço Unitário (R$)
    100 Cachorro quente R$ 12,70
    101 Bauru Simples R$ 4,00
    102 Bauru com ovo R$ 4,60
    103 Hambúrguer R$ 15,00
    104 Cheeseburger R$ 13,50
    05 Refrigerante R$ 4,50



--------------------------------------------------------------------------------------------------------------------------------------------------------------
27-11-2023

1 - Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. (Utilizando decremento)
OBS: Fatorial é a multiplicação do número por seus antecessores   maiores ou iguais a 1 (Ex: fatorial de 5 = 5x4x3x2x1 => 120)

2 - Desafio
Desenvolva um script com front e back end, onde o usuário escolhe um número (do 1 ao 10) e na tela apareça a tabuada calculada escolhida. Detalhe: o campo de escolha deve ser do tipo “select” e as opções dos números devem ser dinâmicas através de um “for” dentro do select. Ou seja nesse exercício, deve-se misturar o PHP com o HTML, tomem cuidado e lembrem-se das aberturas das Tags necessárias.

--------------------------------------------------------------------------
01-12-2023

1 - Faça um programa, com uma função que necessite de três argumentos, e que forneça a soma desses três argumentos através de uma função. Seu script também deve fornecer a média dos três números, através de uma segunda função que chama a primeira. Obs. faça uma validação para não deixar o usuário enviar inputs vazios.

    Resolução

    arquivo1.php

            <!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        
        <body>
            <form action="">
                <input type="number" id="valor1" placeholder="Digite o primeiro valor">
                <input type="text" id="valor2" placeholder="Digite o segundo valor">
                <input type="text" id="valor3" placeholder="Digite o terceiro valor">
                <button onclick="evtEnviarNumeros()">Verificar</button>
            </form>
        </body>
        <script>
            function evtEnviarNumeros() {
                let valor1 = document.querySelector('#valor1').value;
                let valor2 = document.querySelector('#valor2').value;
                let valor3 = document.querySelector('#valor3').value;
        
                let valida = validarCampos(valor1, valor2, valor3);
        
        
                if (valida == true) {
                    window.open('desafioBack.php?valor1=' + valor1 + '&valor2=' + valor2 + '&valor3=' + valor3);
                }
            }
        
            function validarCampos(valor1, valor2, valor3) {
        
                if (valor1 == '') {
                    alert('Preencha todos os campos');
                    document.querySelector('#valor1').focus();
                    return false;
                } else if (valor2 == '') {
                    alert('Preencha todos os campos');
                    document.querySelector('#valor2').focus();
                    return false;
                } else if (valor3 == '') {
                    alert('Preencha todos os campos');
                    document.querySelector('#valor3').focus();
                    return false;
                } else {
                    return true;
                }
            }
        </script>
        </html>
-------------------------------------------------
        arquivo2.php

            <?php 
            
            $num1 = $_GET['valor1'];
            $num2 = $_GET['valor2'];
            $num3 = $_GET['valor3'];
            
            function resultadoFinal($num1, $num2, $num3)
            {
                $media = soma($num1, $num2, $num3) / 3;
            
                $result = [
                    'media' => $media,
                    'soma' => soma($num1, $num2, $num3)
                ];
            
                return $result;
            }
            
            
            function soma($num1, $num2, $num3){
                $soma = $num1 + $num2 + $num3;
                return $soma;
            }
            
            
            $resultado = resultadoFinal($num1, $num2, $num3);
            // $resultado = "qualquer coisa";
            
            var_dump($resultado);
            // print_r($resultado);
            
            echo "<br> A soma eh ".$resultado['soma']." e da média eh: ".$resultado['media'];
            
            ?>

2 - Escreva um script que pergunta ao usuário se ele deseja converter uma temperatura de grau Celsius para Farenheit ou vice-versa. Se ele digitar/escolher 1, é de Celsius para Farenheit, se digitar/escolher 2 é de Farenheit para Celsius, outro valor mostre uma mensagem de erro. Para cada conversão, chame a função correta.

3 - Crie uma função que receba dois valores inteiros como argumentos e retorne se os números são divisíveis, se forem divisíveis verifique se cada número digitado é par ou ímpar e mostre na tela também.

4 - Crie uma função que receba três inteiros como argumentos (ano, mês, dia) e verifique se se trata de um data válida. O ano deverá estar entre 1900 e o presente ano. Deverá retornar um valor booleano.

5 - Crie duas funções que irão calcular o IMC de uma pessoa (os dados serão passados pelo front-end), uma função deverá calcular o IMC e a segunda deverá dizer qual grau a pessoa se encontra (magro, normal, obeso…), retorne o grau para o usuário.

![image](https://github.com/EdsonTiepermann/exercicios-php-tarde-2023/assets/33090891/b91bb4e5-7f97-4f0a-9990-e1b7b56a4e32)



--------------------------------------------------------------------------
15-12-2023

1 - Crie um script para inserir o seu nome completo, e um campo de opções para escolher letras maiúsculas ou minúsculas, em seguida crie uma função para deixar todo o seu nome em maiúsculo e uma para deixar todo o seu nome em minúsculo, e utilize a função e transforme seu nome de acordo com a escolha em tela realizada.

2 - Insira seu nome na tela, e crie um script com função para retornar um array onde cada posição do array contenha uma parte do seu nome.

3 - Dentro do array abaixo, em cada posição contém um valor, escreva um script que receba uma string com os números.
Array[2, 90, 5, 32, 45, 1, 73]

4 - Crie um sorteador dinâmico com três entrada na tela, sendo elas, a primeira e a segunda entrada o gap de números que irá gerar, e a terceira entrada a quantidade de números que serão sorteados, e apresente na tela todos os resultados.

5 - Escreva uma programa que receba a data de nascimento, calcule quantos dias de vida você já está abrilhantando esse mundão.

6 - Escreva um código onde o usuário possa escolher um dos arrays abaixo e selecionar se ele quer ordenar de maneira crescente ou de maneira decrescente. Separe as ordenações em funções diferentes e chame elas dependendo da escolha.
Array1[2, 90, 100, 1, 4, 7]
Array2[3, 7, 13, 87, 1, 2, 69]

7 - Faça um código onde irá gerar 5 números aleatórios. Com esses números gerados, monte um array e caso a primeira posição seja menor que 5, remova o primeiro valor.

8 - Crie uma função que receba um array de 5 números inteiros, os valores serão passados pelo usuário, e retorne a soma de todos os elementos desse array.
--------------------------------------------------------------------------

15-01-2024

1- Crie um cabeçalho em um arquivo a parte, contendo um layout simples, com um breve menu chamando 2 arquivos páginas.
	Crie também um rodapé com um layout simples, contendo algumas informações fictícias.
	Crie também 2 páginas contendo em cada uma um exercício qualquer já resolvido. Um exercício em cada arquivo.
	As funções em PHP devem estar em uma única classe.
	E façam todos os arquivos funcionarem utilizando o que foi passado em sala hoje.




--------------------------------------------------------------------------

--------------------------------------------------------------------------


--------------------------------------------------------------------------

<?php
$cidade = "Boa Vista";

echo "O nome desta cidade é \"$cidade\"";
echo "<hr>";

$filmes = "Marvel";
$$filmes = "Viúva negra";

echo "$Marvel";
echo "<hr>";

$peso = 41;
//var_dump($peso);
if(is_float($peso)):
    echo "É um float!";    
else:
    echo "Não é um float! ";  
endif;
//echo "<br>";

$peso = 41;
var_dump($peso);
/*if(is_float($peso)):
    echo "É um float!";    
else:
    echo "Não é um float!";  
endif;*/
echo "<hr>";

/*$peso = 41;
var_dump($peso);
if(is_float($peso)):
    echo "É um float!";    
else:
    echo "Não é um float! ";  
endif;
//echo "<br>";
echo "<hr>";*/

//$país = 'Suíça';
//echo "Este país é a $país";

$país = 'Suíça';
echo 'Esta é a ' .$país. ', seja bem vindo!';
echo "<hr>";    
///////////////////////////////////////

//esta é uma variável global
$nome = "Anna";

//para que essa variável (global) seja citada dentro de uma fução, é 
//necessário usar o comando "global" antes de chama-la. Caso 
//contrário ela não receberá valor nenhum, já que foi declarada
//fora da função, e a função só lê o que esta dentro dela.
function exibirNome() {
    global $nome;
    echo $nome; 
}

exibirNome();
echo "<hr>";

/*nesse caso a variável foi declarada dentro da função então ela
é uma variável local, que só pode ser acessada dentro da função*/
function exibirData() {
    //global $data;
    $data = "19/01/08"; //here!
    var_dump($data);
    echo " = "; 
    echo $data;
}

exibirData();
/*quando você pede para imprimir o valor da variável fora da função,
dá errado porque a variável foi declarada dentro da função, ou seja,
uma variável local (não pode ser chamada fora da função). Nesse 
caso você precisa declara-la como variável global,dentro da função.*/
//echo $data;
echo "<hr>";

///////////////////////////////////////
//variáveis globais!
$a = 6;
$b = 5;
$c = 10;

/*para acessar a posição de cada varável e seus valores, é
utlizado um array, com o comando "GLOBALS".*/
function soma() {
   echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'] + $GLOBALS['b'] + $GLOBALS['b']; 
}
soma();   
echo "<hr>";

function multiplicação(){
    //var_dump($GLOBALS);
    echo $GLOBALS['a'] * $GLOBALS['b'] - $GLOBALS['c'];
}
multiplicação();
echo "<hr>";
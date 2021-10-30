<?php
$nome = "Anna";

function exibirNome() {
    global $nome;
    echo $nome; 
}

exibirNome();
echo "<hr>";

function exibirCidade() {
    global $cidade;
    $cidade = "Rio";

}

exibirCidade();
echo $cidade;

echo "<hr>";

///////////////////////////////////////
//variáveis globais!
$a = 6;
$b = 5;


function soma() {
   echo $GLOBALS['a'] + $GLOBALS['b']; 
}
soma();         
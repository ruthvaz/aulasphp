<?php
$numero = 20;

if ($numero == 20):
    echo "É igual a 10";
else :
    echo "Não é igual a 10";
endif;
echo "<hr>";

if ($numero >= 30):
    echo "Verdadeiro";
else :
    echo "Falso";
endif;
echo "<hr>";

if ($numero <= 30):
    echo "Verdadeiro";
else :
    echo "Falso";
endif;
echo "<hr>";

if ($numero == 10):
    echo "Verdadeiro";
elseif ($numero <= 20):
    echo "É menor ou igual a 20";
else : 
    echo "Falso";
endif;
echo "<hr>";
/////////////////////////////

$pessoa = "Elle";

echo ($pessoa == "Dier") ? "Sim" : "Não";
echo "<hr>";

$n = 18;

echo ($n >= 70) ? "Sim" : "Não";
echo "<hr>";
/////////////////////////////

$cor = "orange";

switch ($cor):
    case "Preto":
        echo "Sua cor é azul.";
        break;
    case "Lilás":
        echo "Sua cor é lilás.";
        break;
    default:
        echo "Você está sem cor!";
endswitch;
echo "<hr>";

/////////////////////////////

//operações
$a = 100;
$b = 50;
$c = 25;
$d = 5;

$adição = $a + $b - $c;
echo $adição;
echo "<hr>";

$iii = $c ** $d;
echo $iii; 
echo "<hr>";
// (/) = resultado da divisão; (%) = resto da divisão.
// (**) = exponenciação.
//verificar média.
echo (18 + 6 + 1) / 2;
echo "<hr>";    
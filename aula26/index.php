<?php
//while / do while

$isi = 7;

while ($isi <= 20):
    echo "$isi ";
    $isi++;
endwhile;
echo "<hr>";

///////////////////

$testa = 8;

while ($testa >= 1):
    echo "Isi é $testa. <br>";
    $testa--;
endwhile;
//echo $testa;
echo "<hr>";

///////////////////

$testa = 8;

do {
    echo "Teste é $testa. <br>";
    $testa++;
}while ($testa < 16);
echo "<hr>";

$testa = 10;

do {
    echo "Teste é $testa. <br>";
    $testa--;
}while ($testa > 2);
echo "<hr>";

///////////////////////////////////////
//for / foreach

for ($g = 2; $g < 5; $g++):
    echo "Variável recebe $g. <br>";
endfor;
echo "<hr>";

for ($d = 0; $d <= 10; $d++):
    echo "7 x $d = ".($d*7)."<br>";
endfor;
echo "<hr>";

for ($d = 0; $d <= 10; $d++):
    echo "1 + $d = ".($d+1)."<br>";
endfor;
echo "<hr>";

//FOREACH (percorre array)

$t = array(1=>"João. ", 2=>"Dany. ", 3=>"Mary. ", 4=>"Annie.");

foreach ($t as $indice => $valor):
echo $indice." - ".$valor;
endforeach; 
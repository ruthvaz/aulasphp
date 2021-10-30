<?php

function exibirData($nome) {
    echo "O nome dela é $nome";
}
exibirData("Júlia!");
echo "<hr>";

/////////////////////////////

function calcularMedia($no, $na, $nb, $nc, $nd) {
    $med = ($na + $nb + $nc + $nd) / 4;
    if($med >= 8):
        echo "$no foi aprovada com média $med. <br>";
    else :
        echo "$no foi reprovada com média $med. <br>";         
    endif;
}

calcularMedia("Lucy", 70, 60, 60, 80);
calcularMedia("Mob", 100, 100, 100, 100);
echo "<hr>";
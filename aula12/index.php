<?php
$carros = array("Fusca", "Uno", "Gol");
$motos = array("Suzuke", "Yamaha", "Scooter");
print_r($carros);
echo "<hr>";
echo $motos[0]; echo "<br>";
echo $motos[1]; echo "<br>";
echo $motos[2]; echo "<br>";
echo "<hr>";

$profissões = array(1=>"Caminhoneiro.", 2=>"Faxieiro.", 5=>"Programador.");
$profissões[] = "Dentista.";
$profissões[4] = "Cabeleleiro.";
$profissões[8] = "Piloto.";
print_r($profissões);
echo "<br>";
echo $profissões[6];
echo "<br>";
echo $profissões[2];
echo "<hr>";

$países = array();
$países[] = "Bélgica.";
$países[] = "Suíça.";
$países[8] = "Brasil.";
$países[5] = "Dinamarca.";
echo $países[1];
echo "<br>";
print_r($países);
echo "<br>";
echo $países[0];
echo "<hr>";    

echo 'Carro : '.$carros[2].' ; Profissão : '.$profissões[6].'';
echo "<hr>";

$clientes = ["João", "Maria", "José", "Laura"];
echo $clientes[1];
echo "<br>";
print_r($clientes[3]);
echo "<br>";
print_r($clientes);
echo "<hr>";

echo $clientes[2];
echo ", ";
//echo "<br>";
print_r($clientes[0]);
echo "<br>";
echo "<hr>";

//para exibir a quantidade de elementos que existe em determinado
//array, é preciso usar a função "count".
echo count($profissões);
echo "<hr>";
echo "O array 'Países' tem ";
echo count($países);
echo " elementos.";

echo "<br>";
echo 'O array "Clientes" tem ';
echo count($clientes);
echo " elementos.";
echo "<hr>";

$totalMotos = count($motos);
echo $totalMotos;
echo "<hr>";

///////////////////////////////////////
/*para criar um loop para percorrer arrays, é preciso usar a função
foreach ("para cada"). Cada elemento do array "profissões" será
atríbuido a variável "valor". Assim ela receberá cada um dos 
elementos do determinado array */
/*esse é um como um laço, que percorrerá e executará o que está nele,
nesse caso um array, ou seja, em cada repetição um elemento (o proximo elemento)
desse aray será atribuido a variável valor, até que se acabe as repetições*/ 
foreach($profissões as $valor) {
    echo $valor; echo "<br>";
}
echo "<hr>";


foreach($países as $valor) {
    echo $valor.'<br>';
}
echo "<hr>";

echo "Clientes <br>";
foreach($clientes as $indice => $valor) {
    echo $indice." : ".$valor."<br>";
}
echo "<hr>";

/*echo "Clientes : ";
foreach($clientes as $indice => $valor) {
    echo $valor.", ";
}
echo "<hr>";*/

///////////////////////////////////////
//Arrays associativos (com strings).
$artistas = array("Nome"=>"Anitta","Idade"=>25,"Altura"=>1.60);
echo $artistas["Nome"];
echo "<br>";
echo $artistas["Altura"];
echo "<br>";
$artistas["Cidade"] = "Rio";
print_r($artistas);
echo "<hr>";

$artistas["País"] = "Brasil";
print_r($artistas);
echo "<br>";
echo $artistas["Cidade"];
echo "<hr>";

echo 'Nome : '.$artistas["Nome"].'<br> Idade : '.$artistas["Idade"].'';
echo "<hr>";

foreach($artistas as $indice => $valor) {
    echo $indice." : ".$valor."<br>";
}
echo "<hr>";

foreach($artistas as $valor) {
    echo $valor."<br>";
}
echo "<hr>";

//arrays multidimensionais
$continentes = array(
    "América" => array("América" => "Brasil, Costa Rica, México."),
    "Oceania" => array("Países"=>"Samoa", "Da"=>"Tonga", "Oceania"=>"Palau"),
    "África" => array("Nigéria","Senegal", "Etiópia"));
echo $continentes["África"][2];
echo "<hr>";

foreach($continentes["África"] as $indice => $valor) {
    echo $indice." : ".$valor."<br>";
}
echo "<hr>";

foreach($continentes["América"] as $indice => $valor) {
    echo $indice." : ".$valor."<br>";
    echo "<hr>";
}

foreach($continentes["Oceania"] as $indice => $valor) {
    //echo $valor."<br>";
    echo $indice." : ".$valor."<br>";
}
echo "<hr>";
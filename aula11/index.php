<?php
//constantes
define("NOME", "Annie");
define("IDADE", 20);
define("ALTURA", 1.58);
define("FODONA", true);

echo NOME;
echo "<hr>";
var_dump(FODONA);
echo "<hr>";
//para mostrar todos os caracteres de uma vez, basta concatenar
echo 'Nome = '.NOME.'.<br>Idade = '.IDADE.'.<br>Altura = '.ALTURA.'.';
echo "<hr>";    
define("TROPAS", ['Guarda Estacionária.', 'Polícia Militar.', 'Tropa de Exploração.']);
echo TROPAS[1];
echo "<hr>";
var_dump(TROPAS);
echo "<hr>";    

//constantes são automaticamente globais.
function exibirDados() {
    echo NOME;
    echo " da ";
    echo TROPAS[2];
    echo "<hr>";
}
exibirDados();
<?php
$nome = "ola mundo";
var_dump($nome);

if(is_string($nome)):
  echo "É uma string";
else: 
  echo "Não é uma string";
endif;

echo "<hr>";

$nome = 1.0;
var_dump($nome);
if(is_string($nome)):
  echo "É uma string";
else: 
  echo "Não é uma string";
endif;
echo "<hr>";
/////////////////////////////////////////////////

//int//

$idade = 19;
var_dump($idade);
if(is_int($idade)):
  echo "É um int";
else: 
  echo "Não é um inteiro";
endif;
echo "<hr>";

$idade = "Abacaxis";
var_dump($idade);
if(is_int($idade)):
  echo "É um int";
else: 
  echo "Não é um inteiro";
endif;
echo "<hr>";
/////////////////////////////////////////////////

//float//

$altura = 1.90;
var_dump($altura);
if(is_float($altura)):
  echo "É um float";
else: 
  echo "Não é um float";
endif;
echo "<hr>";

$altura = 190;
var_dump($altura);
if(is_float($altura)):
  echo "É um float";
else: 
  echo "Não é um float";
endif;
echo "<hr>";
/////////////////////////////////////////////////

//bolean//

$admin = false;
var_dump($admin);
if(is_bool($admin)):
  echo "É um boleano";
else: 
  echo "Não é um boleano";
endif;
echo "<hr>";  

$admin = 12;
var_dump($admin);
if(is_bool($admin)):
  echo "É um boleano";
else: 
  echo "Não é um boleano";
endif;
echo "<hr>";  
/////////////////////////////////////////////////

//array//

$carros = array("Gol", "Uno", "Camaro", 39, 12.9, false);
var_dump($carros);
if(is_array($carros)):
  echo "É um array";
else: 
  echo "Não é um array";
endif;
echo "<hr>";  

$carros = "array";
var_dump($carros);
if(is_array($carros)):
  echo "É um array";
else: 
  echo "Não é um array";
endif;
echo "<hr>";  
/////////////////////////////////////////////////

//objeto//

class Cliente {
  
  public $nome;
  
  public function atribuiNome($nome) {
    $this -> $nome = $nome;
  }

}

$cliente = new Cliente (); 
$cliente->atribuiNome("Joana");

var_dump($cliente);

if(is_object($cliente)):
  echo "É um objeto";
else: 
  echo "Não é um objeto";
endif;
echo "<hr>";

//null//

$cidade = NULL;
var_dump($cidade);

//resource//
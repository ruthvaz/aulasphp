<?php

// CLASSE, ATRIBUTOS & MÉTODOS //


/*class Pessoa{
    public $nome;
    public $idade;

    public function Falar() {
        echo $this->nome." de ".$this->idade." anos de idade, Falou!";
    }
}

$anne = new Pessoa();
$anne->nome = "Annie ";
$anne->idade = 33;
//$anne->Falar();
//echo $anne->nome;
$anne->Falar();
//echo "<br>";
//echo $anne->idade;*/

///////////////////////////////////////////////////////////////////////////////

// GET & SET //


/*class Login{
    public $email;
    public $senha;

    public function Logar() {
        if($this->email == "bitch@bitch.com" and $this->senha == "F8ck"):
            echo "LoGaaaadooooo!";
        else:
            echo "Dados inválidos";
        endif;
    }
}

$logar = new Login();
$logar->email = "bitch@bitch.com";
$logar->senha = "F8ck";
$logar->Logar(); */


class Login{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome) {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e) {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }


    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($s) {
        $this->senha = $s;
    }

    public function Logar() {
        if($this->email == "bitch@bitch.com" and $this->senha == "F8ck"):
            echo "Logado!";
        else:
            echo "Dados inválidos";
        endif;
    }
}

$logar = new Login("bitch@bitch.com", "F8ck", "Annie");
$logar->setEmail("bitch()@bitch.com");
$logar->setSenha("F8ck");
$logar->Logar();
echo "<br>";

echo $logar->getNome();
echo "<br>";
echo $logar->getEmail();
echo "<br>";
echo "<hr>";

///////////////////////////////////////////////////////////

// HERANÇA //


echo "*HERANÇA*";
echo "<br>";
echo "<br>";

class Veiculos {

    public $modelo;
    public $cor;
    public $ano;

    public function Acelerar() {
        echo "Acelerou!";
    }

    public function Freiar() {
        echo "Freiou!";
    }

}

class Carro extends Veiculos {

    public function abrirPorta() {
        echo "Porta aberta!";
    }

}

class Moto extends Veiculos {

    public function impinar(){
        echo "E caiu!";
    }
}


$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Cinza";
$carro->ano = 2000;
$carro->Acelerar();
echo "<br>";
$carro->abrirPorta();
//echo "<br>"; 
//var_dump($carro);
echo "<br>"; 
echo "<br>";

$moto = new Moto();
$moto->modelo = "50";
$moto->cor = "Vermelha";
$moto->ano = 2018;
$moto->Freiar();
echo "<br>";
$moto->impinar();
//echo "<br>"; 
//var_dump($moto);
echo "<br>";
echo "<br>";
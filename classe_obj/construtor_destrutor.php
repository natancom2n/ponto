<div class="titulo">Construtor e Destrutor</div>

<?php
class Pessoa{
public $nome;
public $idade;

    function __construct($novoNome, $idade = 18){
        echo 'Construtor invocado! <br>';
        $this-> nome = $novoNome;
        $this-> idade = $idade;
    }

    function __destruct(){
        echo 'E morreu! <br>';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

//$pessoa = new Pessoa(); //isso gera erro, obrigatóriamente deve ser passado os atributos

$pessoa1 = new Pessoa("Natan", 39);
$pessoa1->apresentar(); 

//desctruir 
unset($pessoa1);

$pessoa2 = new Pessoa("Maria");
$pessoa2->apresentar(); 
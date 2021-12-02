<div class="titulo">Primeira Classe</div>

<?php

class Cliente {
    //Atributos
    public $nome = 'Anonimo';
    public $idade = 18;

    public function apresentar(){
        return "Nome: {$this->nome}, Idade: {$this->idade}";
    }
}

$c1 = new Cliente();
echo $c1->apresentar(),'<br>';


$c2 = new Cliente();
$c2->nome = 'Ana';
$c2->idade = 25;

$c3 = new Cliente();
$c3->nome = 'Renato';
$c3->idade = 21;


echo $c2->apresentar(),'<br>';
echo $c3->apresentar(),'<br>';


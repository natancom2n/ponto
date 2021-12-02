<div class="titulo">Visibilidade</div>

<?php

class A{

    public $publico = 'publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA(){
        echo "Classe A publico: {$this->publico}<br>";
        echo "Classe A protegido: {$this->protegido}<br>";
        echo "Classe A Privado: {$this->privado}<br>";
        
    }
    private function naoMostrar(){
        echo 'Não vou imprimir<br>';
    }
    
}

$a = new A();
$a->mostrarA();

class B extends A {
    public function mostrarB(){
        
        echo "Classe B publico: {$this->publico}<br>";
        echo "Classe B protegido: {$this->protegido}<br>";
        //Privado não ira ser mostrado, pois o privado pertence a própria classe
        echo "Classe B Privado: {$this->privado}<br>";
    }
}
echo '<br>';
$b = new B();
$b->mostrarB();

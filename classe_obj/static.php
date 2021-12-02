<div class="titulo">Membros Staticos</div>

<?php

class A{
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de statica (classe)';

    public function mostrarA(){
        echo "Não estatico: {$this->naoStatic}<br>";
        //tentativa 1
        // echo "Estático: {$this->static}<br>";
        //tentativa 2
        //echo "Estático: {self::$static}<br>";
        echo "Estático: " . self::$static . "<br>";
    }
    public static function mostrarStatic(){
        //echo   "Não estatico  = {$this->naoStatic}";
        echo "Dentro Função Estático: " . self::$static . "<br>";

    }
}

$objA = new A();
$objA->mostrarA();
//como acessar funcao static
//$objA->mostrarStatic();
echo A::$static, "<br>";
A::mostrarStatic(); //sem ser necessário estanciar.
A::$static = 'Alterado membro da classe';
A::mostrarStatic();

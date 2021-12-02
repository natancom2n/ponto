<div class="titulo">Herança</div>

<?php 

class Pessoa{
    public $nome;
    public $idade;

    function __construct ($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;

        echo 'Objeto criado <br>';

    }

    function __destruct(){

        echo 'Pessoa: E morreu! <br>';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos!<br>";
    } 

}
    class Usuario extends Pessoa{

        public $login;
        function __construct($nome, $idade, $login){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->login = $login;
            echo "User created! <br>";
        }

        function __destruct(){

            echo 'Usuário: E morreu! <br>';
        }
        public function apresentar(){
           // echo "@{$this->login}, {$this->nome}, {$this->idade} anos!<br>";
           //get the parent
           echo "@{$this->login}: ";
           parent::apresentar();
           
        } 

    }

    $usuario = new Usuario('Natan Alves', 39, 'natan');
    $usuario->apresentar();
    unset($usuario);

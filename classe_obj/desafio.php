<div class="titulo">Desafio Data</div>

<?php

class NtaData {
    //Atributos
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){

                return "0{$this->dia}/0{$this->mes}/{$this->ano}";


    }
}

$data1 = new NtaData();
echo $data1->apresentar(),'<br>';

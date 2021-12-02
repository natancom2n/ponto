<div class="titulo">Interface</div>

<?php

interface Animal{
    function respirar();

}

class Cachorro implements Animal{
    function respirar(){
        echo "irei usar oxigegio! <br>";
    }
}

$animal1 = new Cachorro();
$animal1->respirar();


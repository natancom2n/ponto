<div class="titulo">If Else</div>

<?php

echo "<p> Relacionais no If/Else</p><hr>";
$idade = 75;

if ($idade < 18){
    echo "Menor de idade<br>";
}else if ( $idade <= 65){
    echo "Adulto <br>";
}else{
    
    echo "Terceira idade <br>";
}

echo '<p>SpaceShip</p><hr>';
var_dump(500 <=> 3);
var_dump(3 <=> 3);
var_dump(3 <=> 500 );


?>

<style>
    p {
        margin-bottom: -10px;
    }

</style>
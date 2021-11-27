<div class="titulo">Integração CSS</div>

<h1>
    <?php
        echo 'Olá';
        echo '<small>';
        echo ' Mundo!';
        echo '</small>';

    ?>
    <?= "<div center azul>Outra forma de me expressar!</div>"?>
</h1>

<br><br>
<div center><button dobro><?= "Legal" ?></button></div>
<style>
    button {
        padding: 5px <?= 2 * 10 ?>px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 5px;
    }
  
    [center] {
        display: flex;
        justify-content: center;

    }

    [azul] {
        color: #4286f4;
    }
    [dobro] {
        font-size: 2rem;
    }
</style>
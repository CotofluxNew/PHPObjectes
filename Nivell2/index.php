
<?php
require_once('PokerDice.php');

    $juego  = new PokerDice();
    $numeroTiradas = $juego->getTotalThrows();

    for($i=0; $i<$numeroTiradas; $i++){
        $tirada = $juego->shapeName(); 
        echo $tirada. "<br/>";
    }
?>
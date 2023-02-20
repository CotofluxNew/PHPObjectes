
<?php
require_once('PokerDice.php');

    $juego  = new PokerDice();
    $numeroTiradas = $juego->getTotalThrows();

    echo "Las 5 tiradas son: ";

    for($i=0; $i<$numeroTiradas; $i++){
        $tirada = $juego->shapeName(); 
        echo $tirada. "<br/>";
    }
?>
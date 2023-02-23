
<?php
require_once('PokerDice.php');

$tiradas = array();
for ($i = 0; $i < 5; $i++) {
    $tirada = new PokerDice();
    array_push($tiradas, $tirada);
}

foreach ($tiradas as $tirada) {
    $dado = $tirada->throw();
    $cara = $tirada->shapeName();
    $tirada->addThrow($cara);
}

foreach ($tiradas as $tirada) {
    $todasTiradas = $tirada->getTotalThrows();
    var_dump($todasTiradas);
}


?>
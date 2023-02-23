<?php 

require("Shape.php");
require("Triangle.php");
require("Rectangle.php");

$triangle = new Triangle;
$triangle->calculaArea(10,10);
$triangle->imprimirResultado();

$rectangle = new Rectangle;
$rectangle->calculaArea(10,10);
$rectangle->imprimirResultado();


?>
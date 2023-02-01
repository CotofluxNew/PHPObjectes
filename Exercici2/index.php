<?php 

require("Shape.php");
require("Triangle.php");
require("Rectangle.php");

$triangle = new Triangle;
$resultado = $triangle->calculaArea(10,10);
$triangle->imprimirResultado($resultado);

$rectangle = new Rectangle;
$resultado = $rectangle->calculaArea(10,10);
$rectangle->imprimirResultado($resultado);


?>
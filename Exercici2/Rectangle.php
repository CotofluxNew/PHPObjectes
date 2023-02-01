<?php 
class Rectangle extends Shape {

    public function calculaArea($altura, $amplada)
    {
        return $resultadoArea = $altura * $amplada;
    }

    public function imprimirResultado($resultado){
        echo "El resultado del cálculo en la clase ".get_class()." es ".$resultado. "<br/>";
    }
}



?>
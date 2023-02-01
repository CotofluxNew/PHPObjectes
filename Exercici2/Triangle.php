<?php 


class Triangle extends Shape {

    public function calculaArea($altura, $amplada)
    {
        return $resultadoArea = ($altura * $amplada)/2;
    }

    public function imprimirResultado($resultado){
        echo "El resultado del cálculo en la clase ".get_class()." es ".$resultado. "<br/>";
    }
}

?>
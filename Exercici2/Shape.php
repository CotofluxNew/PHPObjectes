<?php 
abstract class Shape{
    
    protected $altura;
    protected $amplada;
    protected $resultadoArea;

    abstract public function calculaArea($altura,$amplada);

    public function imprimirResultado() {
        echo "El resultado del cálculo en la clase " . get_class($this) . " es " . $this->resultadoArea . "<br/>";
    }
}


?>
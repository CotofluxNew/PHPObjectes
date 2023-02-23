<?php 


final class Triangle extends Shape {

    public function calculaArea($altura, $amplada)
    {
        return $this->resultadoArea = ($altura * $amplada)/2;
    }

}

?>
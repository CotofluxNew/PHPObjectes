<?php

/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().

A l'arxiu main defineix dos objectes, un triangle i un rectangle i truca al mètode area de cadascun.
*/

class Shape{
    
    protected $ample;
    protected $alt;
    protected $resultadoArea;
    protected $formaFinal;

    public function inicialitzar($am, $al){

        $this->ample = $am;
        $this->alt = $al;

    }

}

class Triangle extends Shape{
    public function calcularArea(){
        $this->resultadoArea = ($this->ample * $this->alt)/2;
    }
    public function imprimirResultado(){
        return "El resultado del ".$this->formaFinal." area es: ".$this->resultadoArea. "<br/>";
    }
    public function definirForma($nom){
        $this->formaFinal = $nom;
    }
}

class Rectangulo extends Shape{
    public function calcularArea(){
        $this->resultadoArea = $this->ample * $this->alt;
    }
    public function imprimirResultado(){
        return "El resultado del ".$this->formaFinal." area es: ".$this->resultadoArea. "<br/>";
    }
    public function definirForma($nom){
        $this->formaFinal = $nom;
    }
}


$areaTriangulo = new Triangle();
$areaTriangulo->inicialitzar(5,5);
$areaTriangulo->calcularArea();
$areaTriangulo->definirForma("Triangulo");
echo $areaTriangulo->imprimirResultado();

$areaRectangulo = new Rectangulo();
$areaRectangulo->inicialitzar(5,5);
$areaRectangulo->calcularArea();
$areaRectangulo->definirForma("Rectangulo");
echo $areaRectangulo->imprimirResultado();

?>
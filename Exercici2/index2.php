<?php 
abstract class Shape{
    
    abstract public function setAltura($altura);
    abstract public function setAmplada($amplada);
    abstract public function getArea();
}

class Triangle extends Shape {
    public $brand = 'Triangle';
    protected $altura;
    protected $amplada;
    protected $resultadoArea;
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function setAmplada($amplada)
    {
        $this->amplada = $amplada;
    }
    public function getArea()
    {
        $this->resultadoArea = ($this->altura * $this->amplada)/2;
        return $this->resultadoArea;
    }
}

class Rectangle extends Shape {
    public $brand = 'Triangle';
    protected $altura;
    protected $amplada;
    protected $resultadoArea;
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function setAmplada($amplada)
    {
        $this->amplada = $amplada;
    }
    public function getArea()
    {
        $this->resultadoArea = $this->altura * $this->amplada;
        return $this->resultadoArea;
    }
}

$triangle = new Triangle;
$miAltura = $triangle->setAltura(10);
$miAmplada = $triangle->setAmplada(10);
$result = $triangle->getArea();

echo "El resultat de l'área del triangle es ".$result."<br/>";

$rectangle = new Rectangle;
$miAltura = $rectangle->setAltura(10);
$miAmplada = $rectangle->setAmplada(10);
$result = $rectangle->getArea();

echo "El resultat de l'área del rectangle es ".$result."<br/>";


?>
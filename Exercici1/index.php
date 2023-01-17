<?php

/*
Crea una classe Employee, defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos).
*/

class Employee{
    //atributos
    private $nomEmpleat;
    private $souEmpleat;
    //métodos

    public function initialize($nomEmpleat,$souEmpleat){
        $this->nom = $nomEmpleat;
        $this->sou = $souEmpleat;
    }

    public function printEmployee(){

        if($this->sou >6000){
            echo $this->nom." has de pagar impostos perque el teu sou es de ".$this->sou . "<br/>";
        } else {
            echo $this->nom." NO has de pagar impostos". "<br/>";
        }

    }

}

$primeraPersona = new Employee();
$primeraPersona->initialize("Maria", 6001);
$primeraPersona->printEmployee();

$segonaPersona = new Employee();
$segonaPersona->initialize("Anna", 5000);
$segonaPersona->printEmployee();

?>
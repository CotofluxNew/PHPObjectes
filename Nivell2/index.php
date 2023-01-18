<?php

/*
Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.

Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.

Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.*/

class PokerDice{

       //atributos
       private $As;
       private $K;
       private $Q;
       private $J;
       private $set;
       private $vuit;
       private $variable;
       private $tirada1;
       private $tirada2;
       private $tirada3;
       private $tirada4;
       private $tirada5;
       Private $num;
      
       //métodos
       public function initialize($AS, $K, $Q, $J, $set, $vuit){
           $this->AS = $AS;
           $this->K = $K;
           $this->Q = $Q;
           $this->J = $J;
           $this->set = $set;
           $this->vuit = $vuit;
           $this->dado = $dado;
       }

       public function throw(){
        //genera un valor aleatori per a l'objecte a què se li aplica el mètode.
            $this->dado = rand(0,5);
            return $this->dado;
       }
     
       public function shapeName(){
        //que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.
            switch ($this->dado) {
                case 0:
                    return "AS";
                    break;
                case 1:
                    return "K";
                    break;
                case 2:
                    return "Q";
                    break;
                case 3:
                    return "J";
                    break;
                case 4:
                    return "7";
                    break;
                case 5:
                    return "8";
                    break;
            }

            echo $this->dado;
       }

       public function getTotalThrows(){
        //ha de mostrar el nombre total de tirades entre tots els daus(5vegades)
        $this->tirada =  $this->shapeName();
        return $this->tirada;
       }
}

$juego  = new PokerDice();

$numeroTiradas = 5;

for($i=0; $i<$numeroTiradas; $i++){
    $juego->throw();
    $juego->shapeName();
    echo "Este es el reultado de la tirada número ". $i." : ". $juego->getTotalThrows(), "<br/>";
}

?>
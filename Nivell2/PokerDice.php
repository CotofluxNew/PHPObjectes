

<?php

class PokerDice{

    //atributos
    private $faces = array("As", "K", "Q", "J", "7", "8");
    private $todasTiradas = array();

    //métodos
    public function initialize(){

    }

    public function throw(){
        //genera un valor aleatori per a l'objecte a què se li aplica el mètode com 
        //es un array faig de 0 a 5, son 6 posicions.
        $this->dado = rand(0,5);
        return $this->dado;
    }
     
    public function shapeName(){
        //que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.
        $this->current_face = $this->faces[$this->throw()];
        return $this->current_face;
    }

    public function getTotalThrows(){
        //ha de mostrar el nombre total de tirades entre tots els daus(5vegades)
        return $this->todasTiradas;
    }

    public function addThrow($tirada){
        //fico la tirada a l'array $todasTiradas
        array_push($this->todasTiradas, $tirada);
    }
}

?>
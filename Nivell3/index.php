<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projecte Bancs</title>
</head>
<body>
    <h1>El projecte Banc</h1>
    <?php

    /*Crea un projecte Bancs, afegeix al projecte una classe Account amb atributs per número de compte, nom i cognoms del client/a i el saldo actual. Defineix en la classe els següents mètodes:

    Constructor que inicialitzi els atributs.
    Crea el mètode deposit($amount) que permet ingressar una quantitat al compte.
    Crea el mètode withdraw($amount) que permet retirar una quantitat del compte sempre que hi hagi saldo, si no n'hi ha, el mètode haurà de retornar un missatge d'error.
    Getters i Setters.
    Crea una petita interfície amb ajuda d'HTML I CSS que permeti ingressar una quantitat i dipositar o retirar el saldo del compte.

    Fes les validacions pertinents per assegurar que la quantitat ingressada per l'usuari/ària és correcta.*/

    class Account{

        //atributs
        private $numCompte;
        private $nom;
        private $cognoms;
        private $saldoCompte;
        private $importeDeposito;
        private $importeRetiradaDinero;

        //metodes
        //Constructor que inicialitzi els atributs.
        public function __construct($numCompte, $nom, $cognoms, $saldoCompte){
            $this->numCompte = $numCompte;
            $this->nom = $nom;
            $this->cognoms = $cognoms;
            $this->saldoCompte = $saldoCompte;

        }
    
        public function deposit($importeDeposito){
            //permet ingressar una quantitat al compte.
            $this->saldoCompte = $this->saldoCompte + $importeDeposito;
            return $this->saldoCompte;
        }
        public function withdraw($importeRetiradaDinero){
            //permet retirar una quantitat del compte sempre que hi hagi saldo, si no n'hi ha, el mètode haurà de retornar un missatge d'error.
            if(($this->saldoCompte > 0)&&(($this->saldoCompte-$importeRetiradaDinero) > 0 )){
                $this->saldoCompte = $this->saldoCompte + $this->importeRetiradaDinero;
                echo "Gracias por trabajar con nosotros, hemos retirado ". $importeDeposito."de tu cuenta";
            } else {
                echo "Importe suficiente en la cuenta para retirar este importe";
            }
            
        }
        
    }

    $cuenta = new Account(246, "Mari", "Perez Garcia",0);
    echo $cuenta->deposit(1000);

    ?>
</body>
</html>
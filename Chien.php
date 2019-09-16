<?php

class Chien{
    private $_nom;
    private $_couleur;
    private $_age;

    function __construct($nouveauNom, $nouvelleCouleur){
        $this->_nom = $nouveauNom;
        $this->_couleur = $nouvelleCouleur;
    }

    public function getChienNom(){
       return $this->_nom;    
    }

    public function setChienNom($recupNom){
        $this->_nom = $recupNom;     
    }

    public function getChienCouleur(){      
        return $this->_couleur;      
     }
 
    public function setChienCouleur($recuoCouleur){      
        $this->_couleur = $recuoCouleur;       
     }
    public function getChienAge(){
        return $this->_age;
     }
 
    public function setChienAge($recupAge){
        $this->_age = $recupAge;
     }

    private function ageCalculer($_age){
        $vraiAge = $_age * 7;
        return $vraiAge;
    }

    public function presentation(){
        echo('Bonjour. Je suis '.$this->_nom.'. Je suis '.$this->_couleur.'. J\'ai '.$this->ageCalculer($this->_age).' ans.'); 
    }

}

?>
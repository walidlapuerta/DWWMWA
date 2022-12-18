<?php

require_once "classCharacter.php" ;

// Class Fille où je créé le monstre et ses LP, FP //

class Monster extends Character {

    protected $monstreLp ;
    protected $monstreFp ;
    


    public function __construct($monstreFp, $monstreLp){

        
        $this->monstrefp = $monstreFp ;
        $this->monstrelp = $monstreLp ;


          }

          // GETTER & SETTER //
          public function getMonstreLp(){return $this->monstrelp;}
          public function setMonstreLp($monstreLp){$this->monstrelp = $monstreLp;}

          public function getMonstreFp(){return $this->monstrefp;}
          public function setMonstreFp($monstreFp){$this->monstrefp = $monstreFp;}

// Fonction Attack afin d'afficher les FP LP du monstre //
    public function Attack(){

        $txt = "Un monstre apparait face au joueur" . "\n" ; 
        $txt.= "Points de vie du monstre : \n " . $this->monstrelp ;
        $txt.= "Points de force du monstre : \n " . $this->monstrefp ;
        return $txt ;

    }
}

?>
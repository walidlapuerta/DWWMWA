<?php


require_once "classRectangle.php" ;


class Pave extends Rectangle {

protected $hauteur ;


    public function __construct($Longueur, $Largeur, $hauteur){

        $this->hauteur = $hauteur ;
        $this->longueur = $Longueur ;
        $this->largeur = $Largeur ;
    }

    public function getLongueur(){$this->longueur;}
    public function getLargeur(){$this->largeur;}


    public function setLongeur($Longueur){$this->longueur = $Longueur;}
    public function setLargeur($Largeur){$this->largeur = $Largeur;}

    public function Volume(){

        $volume = $this->longueur * $this->largeur * $this->hauteur ;
        return $volume ;
    }

    public function Afficher(){

        $txt= "Volume : " . $this->Volume() . "\n" ;
        return $txt ;
    }

}


?>
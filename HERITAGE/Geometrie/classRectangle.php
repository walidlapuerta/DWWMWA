<?php


class Rectangle {

    protected $Longueur ;
    protected $Largeur ;



    public function __construct($Longueur, $Largeur){

        $this->longueur = $Longueur ;
        $this->largeur = $Largeur ;
    }


    public function getLongueur(){$this->longueur;}
    public function getLargeur(){$this->largeur;}


    public function setLongeur($Longueur){$this->longueur = $Longueur;}
    public function setLargeur($Largeur){$this->largeur = $Largeur;}


    public function Perimetre(){

        $perimetre = ($this->longueur + $this->largeur) * 2 ;
        return $perimetre ;
    }

    public function Aire(){
        $aire = $this->longueur * $this->largeur ;
        return $aire ;
    }
    

    public function VerifierCarre(){
        if($this->longueur == $this->largeur){
            return "Il s'agit d'un carré " . "\n" ;
        }
        else{
            return " Non, il s'agit bien d'un rectangle " . "\n" ;
        }
    }

    public function __tostring(){
        $txt = "Longueur : " . $this->longueur . "\n" ;
        $txt.= "Largeur : " . $this->largeur . "\n" ;
        $txt.= "Périmétre : " . $this->Perimetre() . "\n" ;
        $txt.= "Aire : " . $this->aire() . "\n" ;
        $txt.= "Il s'agit d'un carré/ Non, il s'agit bien d'un rectangle" . "\n" . $this->VerifierCarre() . "\n" ;

        return $txt ;
    }


}


?>
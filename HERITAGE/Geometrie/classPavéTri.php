<?php


require_once "classTriangle.php" ;

class PaveTri extends Triangle {

    public function __construct($base, $hauteur)
    {
        $this->base = $base ;
        $this->hauteur = $hauteur ;
    }


    public function getBase(){$this->base;}
    public function getHauteur(){$this->hauteur;}


    public function setBase($base){$this->base = $base;}
    public function setHauteur($hauteur){$this->hauteur = $hauteur;}


    public function Volume(){
        
        $volumeTri =  ($this->AireTriangle() * $this->hauteur) / 3 ;
        return $volumeTri ;
    }

    public function AfficherTri(){
        $txt = "Aire : " . $this->Volume() . "\n" ;
        return $txt ;
    }

}

?>
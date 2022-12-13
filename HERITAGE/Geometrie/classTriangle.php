<?php

class Triangle {

    protected $base ;
    protected $hauteur ;


    public function __construct($base, $hauteur)
    {
        $this->base = $base ;
        $this->hauteur = $hauteur ;
    }


    public function getBase(){$this->base;}
    public function getHauteur(){$this->hauteur;}


    public function setBase($base){$this->base = $base;}
    public function setHauteur($hauteur){$this->hauteur = $hauteur;}



    public function PerimetreTriangle(){
        $hypotenuse = hypot($this->base,$this->hauteur);
    $perimetre = $this->base + $this->hauteur + $hypotenuse;
    return $perimetre;
    }

    public function AireTriangle(){

        $aireTri = ($this->hauteur * $this->base) / 2 ;
        return $aireTri ;
    }
    public function AfficherTriangle(){
        $tri = "La base est de : " . $this->base . "\n" ;
        $tri.= "La hauteur est de " . $this->hauteur . "\n" ;
        $tri.= "Le périmètre est de : " . $this->PerimetreTriangle(). "\n" ;
        $tri.= "L'aire est de : " . $this->AireTriangle() . "\n" ;

    }
}





?>
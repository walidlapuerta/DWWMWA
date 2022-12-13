<?php

class VilleIF implements IFormatage {

    private $ville ;
    private $cp ;


    public function __construct($ville, $cp)
    {
        $this->ville = $this->formatageChaine($ville);
        $this->cp = $this->formatageNombre($cp);


    }


    public function getVille(){return $this->ville;}
    public function setVille($ville){return $this->ville = $ville;}

    public function getCp(){return $this->cp;}
    public function setCp($cp){return $this->cp = $cp;}


    public function formatageChaine($chaine)
    {
     return strtoupper($chaine);
    }

    public function formatageNombre($nombre)
    {
        return number_format($nombre,2,","," ");
    }

    public function formatageDate($date){} 

}


?>
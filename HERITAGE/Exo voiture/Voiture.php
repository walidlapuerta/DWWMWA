<?php



class Voiture {

    private $couleur ;
    private $marque ;
    private $modele ;
    private $nbkm ;
    private $motorisation ;


    public function __construct($couleur, $marque, $modele, $nbkm, $motorisation)
    {
        $this->couleur = $couleur ;
        $this->marque = $marque ;
        $this->modele = $modele ;
        $this->nbkm = $nbkm ;
        $this->motorisation = $motorisation ;
    }

    public function getCouleur(){return $this->couleur;}
    public function getMarque(){return $this->marque;}
    public function getModele(){return $this->modele;}
    public function getNbkm(){return $this->nbkm;}
    public function getMotorisation(){return $this->motorisation;}
    

    public function setCouleur($couleur){$this->couleur = $couleur;}
    public function setMarque($marque){$this->marque = $marque;}
    public function setModele($modele){$this->modele = $modele;}
    public function setNbkm($nbkm){$this->nbkm = $nbkm;}
    public function setMotorisation($motorisation){$this->motorisation = $motorisation;}



    public function __toString(){
        $texte = "Cette voiture est le modèle " . $this->modele . " de la marque " . $this->marque . " de couleur " . 
        $this->couleur . " de motorisation " . $this->motorisation . " avec un kilomètrage de " . $this->nbkm . "\n" ;
        return $texte ;
    }


    public function Rouler($ajout){
        $this->nbkm = $this->nbkm + $ajout;
        echo "Le nouveau kilométrage de la voiture ". $this->modele . " est de " . $this->nbkm . "\n" ;

    }

}







?>
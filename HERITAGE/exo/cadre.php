<?php ob_start() ?>


<?php

require "employe.php" ;



class Cadre extends Employe {

    private $cadre ;
    
    public function __construct($cadre, $numsecu, $salaire, $job)
    {
        $this->cadre = $cadre ;
        $this->numsecu = $numsecu ;
        $this->salaire = $salaire ;
        $this->job = $job ;
    }
    
    public function getCadre(){return $this->cadre;}
    public function setCadre($cadre){return $this->cadre;}



    public function __toString()
    {
        $texte = "Le cadre " . $this->cadre  . "\n" . "possède le num de sécu :" . $this->numsecu . "\n" . "et gagne ". $this->salaire . " euros" . "\n" ;
        return $texte ;
    }
    

    public function Augmentation(Employe $employe, $pourcentage){
        $augmentation = $employe->setSalaire($employe->getSalaire()* (1+ $pourcentage)) ;
        return $augmentation ;
      }

      public function Augmentation2(Employe $employe3, $pourcentage2){
        $augmentation2 =  $employe3->setSalaire($employe3->getSalaire()* (1+ $pourcentage2)) ;
        return $augmentation2 ;
      }

    public function Manage(Employe $Manage1, $Manage2){
        $Manager = $Manage1->setName($Manage1->getName()). $Manage2->setName($Manage2->getName())  ;
    }
    

    
    }

    



?>
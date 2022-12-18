<?php

require_once "Interface.php" ;
require_once "classLapin.php" ;
require_once "classChasseur.php" ;

$lapin = new Lapin ("blanc" , 4) ;
$chasseur = new Chasseur("Backalive", "fusil") ;

echo "Le lapin " . $lapin->getCouleur() . " à " . $lapin->getPattes() . " pattes a été créé." . "\n" ;
echo "Le chasseur " . $chasseur->getNom() . " a été créé avec un " . $chasseur->getArme() . "\n" ;

echo $chasseur->getNom() . " avance avec son " . $chasseur->getArme(). "\n";
echo $lapin->Crier() ;

while($lapin->getenVie()){
    $lapin->setEnVie(rand(1,6));
    if($lapin->getenVie()==1 || $lapin->getenVie()==6){
        $lapin->setEnVie(true);
    }
    else{
        $lapin->setEnVie(false) ;

    } 

echo $lapin->seNourrir();
echo $chasseur->seDeplacer() ;
echo $lapin->crier();
echo $chasseur->Chasser();
echo $lapin->seDeplacer();
}



?>
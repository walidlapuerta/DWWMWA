<?php

require "Voiture.php" ;


$voiture1 = new Voiture ("Blanc","Lexus", "LFA", 1000, "Thermique") ;
$voiture2 = new Voiture ("Rouge","Ferrari", "FXXKA", 3000, "Thermique") ;
$voiture3 = new Voiture ("Noir" ,"Mercedes", "EQS",5000, "Electrique") ;


// echo $voiture1->__toString() ;
// echo $voiture2->__toString() ;
// echo $voiture3->__toString() ;

// Utiliser un tableau et un foreach afin d'afficher chaque voiture 

$voitures = [$voiture1, $voiture2, $voiture3] ;

foreach($voitures as $value){
    echo $value->__toString(). "\n" ;
}





$voiture1->Rouler(300) ;
$voiture2->Rouler(700) ;
// echo $voiture1 ;


?>
<?php ob_start() ?>


<?php

require "cadre.php" ;



$cadre = new cadre("Alain Deloin", 1840259453666, 2100.23, "chef maintenance", [$employe1, $employe2]) ;

echo $cadre->__toString();

$employe1 = new Employe("Jean Neymar", 1850389546458, 1500.56, "soudeur");
$employe2 = new Employe("Simon Jeremy", 179028955812, 1700.47 , "assistant mécanicien");
$employe3 = new Employe("Odile Deray", 285097154678, 1900.14 ,"magasinière");

echo $employe1->__toString() ;
echo $employe2->__toString() ;
echo $employe3->__toString() ;

$cadre->Augmentation($employe1, 0.1) ;
echo "Le cadre augmente " .$employe1 ; 

$cadre->Augmentation2($employe3, 0.2) ;
echo "Le cadre augmente " . $employe3 ;

$cadre->Manage($employe1, $employe3) ;
echo "Le cadre manage" . $employe1 . " et " . $employe3;


?>


<?php

$chomage = array("Autriche" =>4.9, "Allemagne" =>9.3 ,"Danemark" =>4.8 , "Espagne" =>9.4 , "France" =>9.7);
$chomagetotal = 0 ;
$chomageMin = 100;


//afficher taux de chômage correspondant
foreach($chomage as $pays => $valeur){
    echo
     "Chomage de " . $pays . " est de : " . $valeur . "%". "\n" ;
}
echo "\n";


//afficher les pays européens ayant moins de 5 % de chômage
foreach($chomage as $pays => $valeur){
    if ($valeur<=5){
        echo "Ces pays ont un chômage inféreur à 5% : ". $pays . "\n" ;
    }
}

//Afficher le  pays ayant le taux de chômage le plus faible

// echo "La valeur minimale est : " . (min(array("Autriche" =>4.9, "Allemagne" =>9.3 ,"Danemark" =>4.8 , "Espagne" =>9.4 , "France" =>9.7))) . "\n" ;

foreach($chomage as $pays=>$tauxDeChomage){
    if($tauxDeChomage <$chomageMin){
        $chomageMin = $tauxDeChomage ;
        $paysMin = $pays ;
        
    }
}
echo  "le pays avec le plus bas taux de chomage= ".$paysMin." ".$chomageMin;


?>
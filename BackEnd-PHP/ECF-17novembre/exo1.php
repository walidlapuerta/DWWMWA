<?php

// Calcul sur le cercle

$rayon = readline("Quel est le rayon du cercle ?") ;
$Pi = 3.14 ;
$circonference = 0 ;
$Surface = 0 ;
$Calcul = true OR false;


// J'utilise un "if" afin de calculer les valeurs demandées. Le rayon doit être strictement supérieur à zéro 
// afin que la calcul du rayon et de la surface puisse s'effectuer.


if ($rayon>0) {
    $circonference = 2*$Pi*$rayon ;
echo "La circonférence est de : " .  $circonference . "\n" ;

$Surface = $rayon * $rayon * $Pi ;

echo "La surface est de : " . $Surface . "\n" ;

}

// Dans un second temps, j'inclus mon "if" dans une boucle while avec un booléen true/false
// afin de répéter l'opération autant de fois que l'utilisateur le souhaite.
// Cependant, je ne suis pas parvenu à afficher la condition "false" dans le cas où 
// l'utilisateur ne souhaite pas poursuivre.


while  ($Calcul = readline("Souhaitez-vous effectuer un autre calcul (true/false) ? ")) {

if ($Calcul=true) {

    $rayon = readline("Quel est le rayon du cercle ?") ;
        $circonference = 2*$Pi*$rayon ;
    echo "La circonférence est de : " .  $circonference . "\n" ;
    
    $Surface = $rayon * $rayon * $Pi ;
    
    echo "La surface est de : " . $Surface . "\n" ;
}

elseif($Calcul=false){

        echo "Au revoir et à bientôt \n " ;
}

}





 





?>
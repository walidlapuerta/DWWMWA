<?php

$nombre = readline("Quel chiffre voulez vous multiplier de 1 à 10 : ");
$compteur = 0;
$repeat ;
$compteur2 =0 ;


// J'affiche la table de multiplication dans une boucle "while" avec un compteur de 0 qui augmente jusqu'à 10.

while ($compteur <10){

    $compteur = $compteur +1;
    $resultat = $nombre * $compteur ;
echo "$nombre * $compteur = $resultat" . "\n" ;

}

// Je propose à l'utilisateur de continuer.
$repeat = readline("Voulez-vous continuer ? (O/N) ") ;

// Dans un second temps, j'intègre dans une seconde boucle "while" la possibilité de continuer ou non la table de multi, 
// Si le "O" est choisi, alors une seconde table avec un nouveau chiffre écrit s'affiche.

while ($repeat) {


if($repeat== "O"){

$nombre2 = readline("Quel chiffre voulez vous multiplier de 1 à 10 : ");

do{

    $compteur2 = $compteur2 +1;
    $resultat = $nombre2 * $compteur2 ;
echo "$nombre2 * $compteur2 = $resultat" . "\n" ;

}

while ($repeat==true AND $compteur2 <10) ;

$repeat = readline("Voulez-vous continuer ? (O/N) ") ;


}

// Si le "N" est choisi alors le programme affiche ce message, toutefois, je ne suis pas parvenu à le faire afficher qu'une seule fois.
// Ce message s'affiche en boucle où ne s'affiche selon son ajout dans la boucle "while" ou non.

if ($repeat== "N"){

    do{
    echo "Au revoir, à bientôt \n" ;
}
while($repeat==false) ;

}


}






?>
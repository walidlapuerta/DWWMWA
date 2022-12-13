<?php

// Ecrire une fonction qui permet de calculer le prix TTC en fonction du prix HT, le nombre d’articles
// et le taux de tva.

function prix(){

    $PrixHT = readline ("Prix HT : ");
$nombreArticle = readline ("Nombre d'article : ");
define ("TVA", 1.2);

echo "Prix TTC : " . $PrixHT * $nombreArticle * TVA;
return;
}


// Écrire une fonction qui calcul le PGCD
function PGCD() {

$nombre1 = readline ("Choisissez un premier nombre : ");
$nombre2 = readline ("Choisissez un deuxieme nombre : ");

while ( $nombre1 * $nombre2 != 0){
    if ($nombre1 > $nombre2){
        ($nombre1 = $nombre1 - $nombre2);
    } else {
        ($nombre2 = $nombre2 - $nombre1);
    }
}
if ($nombre1 == 0 ){
    echo ("Le PGCD est ") . +$nombre2 ;
} else {
    echo ("PGCD est ") . +$nombre1;
}
return;

}


// Écrire une fonction qui calcul le PPCM
function PPCM (){
    $nombre1 = readline ("Choisissez un premier nombre : ");
    $nombre2 = readline ("Choisissez un deuxieme nombre : ");

    $NombreA = $nombre1;
    $NombreB = $nombre2;

    while (($nombre1 * $nombre2) !=0){
        if ($nombre1 > $nombre2){
            $nombre1 = $nombre1 - $nombre2;
        }else {
            $nombre2 = $nombre2 - $nombre1;
        }
    }
    if ($nombre1 == 0){ 
        echo ("Le PPCM est ") . + (($NombreA * $NombreB)/$nombre2);
    } else {
        echo ("PPCM est ") . + (($NombreA * $NombreB)/$nombre1);
    }
}


// Écrire une fonction qui calcul et affiche la table de multiplication d’un nombre entré par
// l’utilisateur.
function calcul(){

$nombre = readline("Quel chiffre voulez vous multiplier de 1 à 10");
$compteur = 0;
while ($compteur <10){
    $compteur = $compteur +1;


    echo ($nombre * $compteur . "\n");
}
}


// Écrire une fonction qui calcul la factorielle d’un nombre entré par l’utilisateur et l’affiche
function factorielle(){

$nombre = readline("entrez un nombre") . "\n" ;
$fact = 1;

for($i=1;$i<=$nombre;$i++) {
    $fact = $fact * $i ;
}

echo ("La factorielle de" . $nombre . "est de : " . $fact) ;
}


function Tableau(){
    $tableau = [];

for($i=0;$i<=5;$i++){
    $saisie = readline("nombre") ;
    $table[$i] = $saisie;
}

$somme = array_sum($table);
echo "La somme est :". $somme ;

}


?>

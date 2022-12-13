<?php



//Écrire un programme qui permet de convertir des euros en monnaie étrangères
function Conversion(){

$Euro = readline("Entrez un montant") ;
$UK = 1;
$USA = 2 ;
$Canada = 3 ;
$Japon = 4 ;
$Mexique = 5 ;
$Maroc = 6 ;
$Inde = 7 ;


echo " 1. Angleterre : £ \n 2. USA : $ \n 3. Canada : Canadian $ \n 4.Japon : Yen \n 5.Mexique : Pesos \n 6.Maroc : Dirham \n 7.Inde : Roupie \n"  ;
echo "\n" ;
$Pays = readline("Choissisez un pays et sa devise :  ") ;

echo "\n" ;

if($Pays==$UK){
$UK = $Euro * 0.874 ;
echo "Le montant converti de cette devise est de : " . $UK . "  £ \n " ;
}
elseif($Pays==$USA){
    $US = $Euro *1.037 ;
    echo "Le montant converti de cette devise est de : " . $US . "  $  \n" ;
}
elseif($Pays==$Canada){
    $Cnd = $Euro *1.379 ;
    echo "Le montant converti de cette devise est de : " . $Cnd . "  Canadian $  \n" ;
}
elseif($Pays==$Japon){
    $JPY = $Euro *144.536 ;
    echo "Le montant converti de cette devise est de : " . $JPY . "  Yen  \n" ;
}
elseif($Pays==$Mexique){
    $MXP = $Euro *20.081 ;
    echo "Le montant converti de cette devise est de : " . $MXP . " Pesos  \n" ;
}
elseif($Pays==$Maroc){
    $MAD = $Euro *11.276 ;
    echo "Le montant converti de cette devise est de : " . $MAD . "  Dirham  \n" ;
}
elseif($Pays==$Inde){
    $INR = $Euro *83.997 ;
    echo "Le montant converti de cette devise est de : " . $INR . " Roupie  \n" ;
}


}


// Déclarer et initialiser une variable de départ avec une valeur supérieure à 100 et inférieure à
// 1000, effectuer des tirages aléatoires des nombres jusqu’à obtenir la même valeur que la variable de
// départ et afficher le nombre d’itérations réalisées.

function Variable(){
    $variable = 927 ;
$random = rand(100,1000) ;
$compteur = 0 ;

while ($random!=$variable){
    $random = rand(100,1000) ;
    $compteur++ ;
}
echo "Le nombre d'itérations est de  " . $compteur ;
}


// Même exercice que le précédent, mais cette fois ci avec une boucle do…Whil

function VariableDoWhile(){
    $variable = 927 ;
$compteur = 0 ;

do{
    $random = rand(100,1000) ;
    $compteur++ ;
}


while ($random!=$variable) ;


echo "Le nombre d'itérations est de  " . $compteur ;
}

// Écrire un programme qui permet d’afficher les mots d’une phrase donnée avec une initiale en
// majuscule

function Majuscule(){
    $texte = ucwords("nonante nonante trois nonantos volant en hollande jsuis en nonante") ;
    echo $texte ;

}

// Écrire une fonction qui compare deux nombres demandés à l’utilisateur et affiche nombre1 est
// plus grand que nombre2, ou le contraire, ou l’égalité. Tester tous les cas.

function Comparatif(){

    $nombre1 = readline("Entrez une valeur");
    $nombre2 = readline("Entrez une valeur") ;

    if  ($nombre1<$nombre2)  {
        echo  $nombre1 ." est plus petit que " . $nombre2 ;
    }
    elseif ($nombre1>$nombre2) {
        echo $nombre1 ." est plus grand que " . $nombre2 ;
    }
    elseif ($nombre1==$nombre2) {
        echo "égalité";
    }

}



?>

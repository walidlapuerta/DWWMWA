<?php
$MlleRose = "Mademoiselle Rose" . "\n" ; 
$ProfViolet = "Professeur Violet" . "\n";
$ColMoutarde = "Colonel Moutarde". "\n";
$RvdOlive = "Reverand Olive" . "\n";
$MmeLeblanc = "Madame Leblanc". "\n" ;
$Reponse1 ;
$Reponse2 ;
$Reponse3 ;
$Reponse4 ;


echo "Pensez à un personnage" ;

$Reponse1 = readline("Votre personnage est-il un homme ?") ;
    if (true) {
        echo "$ProfViolet, $ColMoutarde, $RvdOlive";
    }
    elseif (false) {
        echo "$MlleRose, $MmeLeblanc";
    }


$Reponse2 = readline("Votre personnage porte des lunettes ?") ;
    if (true) {
echo "$ProfViolet , $ColMoutarde , $RvdOlive" ;
    }
    elseif (false) {
echo "$MlleRose, $MmeLeblanc" ;
    }


$Reponse3 = readline("Votre personne est-il moustachu ?") ;
    if(true) {
        echo "Votre personnage est" . $ColMoutarde ;
    }
    elseif (false) {
        echo "$MlleRose, $ProfViolet, $RvdOlive, $MmeLeblanc" ;
    }

$Reponse4 = readline ("Votre personnage porte-t-il un chapeau ?") ;
if (true) {
echo "Votre personnage est" .$ProfViolet ;
}
elseif (false) {
    echo "$ColMoutarde, $RvdOlive, $MlleRose, $MmeLeblanc" ;
}



?>
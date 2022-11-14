<?php

echo "\n" ;
echo "----Quel genre de beau gosse êtes-vous ?----" ; 
echo "\n" ;


$choix = readline("----entrez un chiffre----") ;

while ($choix < 1 AND $choix > 5){
}
echo "\n" ;

switch ($choix) {
    case 1:
        echo "Vous êtes un mignon beau gosse, vous pouvez faire mieux afin d'atteindre votre plein potentiel #EnCoursDeChargement" ;
        break;
    case 2:
        echo "Toutes les filles vous veulent, vous êtes le parfait mélange entre Di Caprio et Ronaldo, votre sex-appeal est légendaire #MASTERCLASS";
        break;
    case 3: 
        echo "Vous avez la tronche d'une tortue ninja, tout le monde vous trouve styleyyy mais vous préférez vous cacher dans les égouts car la population aura trop peur de vous, KOWABUNGAAA !!!!";
        break;
    case 4:
        echo "Laissez-moi réflechir... Euuuh nan laissez tomber, choisissez un autre nombre svp #Erreur404" ;
        break;
    case 5:
        echo "Ne cherchez pas plus loin, la perfection est dans votre miroir, les femmes font la queue à votre domicile afin d'espérer un date ou un autographe signé de vos mains #LeCheminDuroi";
        break;
        
}


?>
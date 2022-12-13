<?php


$Nombre1 = readline("entrez un nombre") ;
$Nombre2 = readline("entrez un nombre");
echo "1. Addition \n 2. Soustraction \n 3. Division \n 4.Multiplication \n" ;
$Operation = readline("entrez une opération") ;



echo "\n" ;

switch ($Operation) {
    case 1:
        $Result=$Nombre1+$Nombre2;
        break;
    case 2:
         $Result=$Nombre1-$Nombre2;
        break;
    case 3: 
        $Result=$Nombre1/$Nombre2;
        break;
    case 4:
        $Result=$Nombre1*$Nombre2;
        break;
        
}

echo "Le résultat de l'opération est :" . $Result;


?>
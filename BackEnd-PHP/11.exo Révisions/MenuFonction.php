<?php
require ("fonctions.php");
echo "1.exo1\n" ."2.exo2\n" . "3.exo3\n" . "4.exo4\n" . "5.exo5\n" . "6.exo6 \n";
$Menu = readline("Choisis un exo frero et fait vite !") ;


echo "\n" ;

switch($Menu){
case 1 :
Conversion();
break;

case 2 :
Variable();
break;

case 3 :
VariableDoWhile();
break;

case 4 ;
Majuscule();
break;

case 5 ;
Comparatif();
break ;

}

?>
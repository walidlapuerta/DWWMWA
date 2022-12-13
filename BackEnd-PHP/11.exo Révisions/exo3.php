<?php

$variable = 927 ;
$compteur = 0 ;

do{
    $random = rand(100,1000) ;
    $compteur++ ;
}


while ($random!=$variable) ;


echo "Le nombre d'itérations est de  " . $compteur ;


?>
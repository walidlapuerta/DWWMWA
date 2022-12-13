<?php

$variable = 927 ;
$random = rand(100,1000) ;
$compteur = 0 ;

while ($random!=$variable){
    $random = rand(100,1000) ;
    $compteur++ ;
}
echo "Le nombre d'itérations est de  " . $compteur ;


?>
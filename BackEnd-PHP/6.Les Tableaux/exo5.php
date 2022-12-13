<?php

$max = 1 ;
$Valeur = readline("ecrire valeur :");
$tableau = [] ;
for ($i=1; $i<=$Valeur;$i++){
    $nombre = readline("ecrire nombre : ") ;
    $tableau[$i] = $nombre ;
    if($max<$nombre){
        $max = $nombre;
        $imax = $i ;
    }
}

echo"la plus grande valeur est en position : " . $imax . " et est de " . $max. "\n" ;

?>
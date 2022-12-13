<?php


$max = 0 ;
$Valeur = readline("ecrire nombre d'élèves :");
$tableau = [] ;

for ($i=1; $i<=$Valeur;$i++){
    $nombre = readline("notes des élèves : ") ;
    $tableau[$i] = $nombre ;
    $moyenne = array_sum($tableau) / count($tableau);
    
}

for ($i=1; $i<=$Valeur;$i++){
    if($tableau[$i]>$moyenne){
        $max = $max + 1;
    }
}


echo "La moyenne est de : " . $moyenne . "\n" ;

// echo"le total de notes superieurs à la moyenne est de :" . $max . "\n" ;

?>
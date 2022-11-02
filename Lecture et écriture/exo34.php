<?php

$prixht = readline( "entrez prix ht");
$nbrart = readline( "entrez nombre d'article");
$TVA = readline( "entrez TVA");


$PRIXTTC = $prixht * $nbrart * (1 + $TVA);

echo "Le prix TTC est de : " .$PRIXTTC ;

?>
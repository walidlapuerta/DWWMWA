<?php

$nombre = readline("entrez un nombre") . "\n" ;
$fact = 1;

for($i=1;$i<=$nombre;$i++) {
    $fact = $fact * $i ;
}

echo ("La factorielle de" . $nombre . "est de : " . $fact) ;


?>
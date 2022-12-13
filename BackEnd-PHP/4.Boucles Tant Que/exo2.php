<?php

$nombre = readline("ecrire un nombre") ;

while ($nombre<10 OR $nombre>20); {
    readline($nombre);

    if ($nombre<10){
         readline("plus grand");
        }

    elseif ($nombre>20) {
        readline("plus petit");
    }
}
?>
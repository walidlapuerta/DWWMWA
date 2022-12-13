<?php

$nombre1 = readline ("entrez un nombre");
$nombre2 = readline ("entrez un nombre 2");

if  (($nombre1<0 AND $nombre2 <0) OR ($nombre1>0 AND $nombre2>0))  {
    echo "positif";
}

else {
    echo "negatif";
}

?>
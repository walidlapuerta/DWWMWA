<?php

$nombre = readline ("entrez un nombre");

if  ($nombre<0)  {
    echo "negatif";
}
elseif ($nombre>0) {
    echo "positif";
}
else {
    echo "nul";
}

?>
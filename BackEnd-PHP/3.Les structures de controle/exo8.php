<?php

$nombre = readline("nombre de copies") ;

if ($nombre>30) {
    echo "La facture est de" && "(0.10*10+0.09*20+0.08*($nombre-30))";
}
elseif ($nombre>10) {
    echo "minime";
}

elseif ($AGE>=8) {
    echo "pupille";
}
?>
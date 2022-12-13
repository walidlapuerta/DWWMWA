<?php

$SEXE = readline("Quel est votre sexe ?");
$AGE = readline("Quel est votre âge ?");


if (($SEXE=="Homme" && $AGE>20) or ($SEXE=="Femme" && $AGE>18 && $AGE<35)) {
    echo "paye la dotte frero";
}
else {
    echo ("Non imposable");
}

?> 
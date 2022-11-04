<?php

$NOMBRE ;

echo ($NOMBRE = rand (0, 20) . "\n");

if ($NOMBRE<7) {
    echo "Bonjour" ;
}
elseif ($NOMBRE>=7 AND $NOMBRE<14)  {
    echo "Salut" ;
}

elseif ($NOMBRE>=14) {
    echo "Hello" ;
}



?>
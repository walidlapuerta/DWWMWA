<?php

$nombre = readline("entrez un nombre") . "\n" ;

echo ("Les 5 nombres précédents sont") ;

for($i=$nombre; $i>=$nombre-5; $i--){
    echo ("$i") . "\n"; 
}

echo ("*****************************") ;

echo ("Les 5 nombres suivants sont") ;

for($i=$nombre; $i<=$nombre+5; $i++){
    echo ("$i") . "\n"; 
}
?>
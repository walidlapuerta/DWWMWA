<?php
require ("./service/fonctions.php");
spl_autoload_register('chargerClasse');

$personne = new PersonneIF("tintin","03/03/1920",3000.34, "Dunkerque");
$ville = new VilleIF ("dunkerque", 59240) ;
echo $personne->getNom(). "\n";
echo $personne->getDateNaissance(). "\n";
echo $personne->getSalaire(). "\n";
echo $ville->getVille(). "\n";
echo $ville->getCp(). "\n";

?>
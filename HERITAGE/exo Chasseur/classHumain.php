<?php

require_once "Interface.php" ;


abstract class Humain implements SeDeplacer {

    protected $nom ;

    public function __construct($nom){

        $this->nom = $nom ;

    }

    public function getNom(){return $this->nom;}
    public function setNom($nom){$this->nom = $nom;}



    public function seDeplacer(){}

    


    
}

?>

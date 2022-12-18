<?php

require_once "Interface.php" ;

abstract class Animal implements SeDeplacer {

    protected $couleur ;
    protected $pattes ;

    public function __construct($couleur, $pattes){

        $this->couleur = $couleur ;
        $this->pattes = $pattes ;
    }

    public function getCouleur(){return $this->couleur;}
    public function setCouleur($couleur){$this->couleur = $couleur;}

    public function getPattes(){return $this->pattes;}
    public function setPattes($pattes){$this->pattes = $pattes;}


    public function seDeplacer(){}

    public function Crier(){} 


    
}

?>
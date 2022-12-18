<?php

// Class Parent afin de créer les LP, FP, et la fonction Attack à utiliser dans les Class filles //

abstract class Character {


        protected $lifepoint ;
    protected $strenghtpoint ;

    public function __construct($lifepoint, $strenghtpoint){

        $this->lp = $lifepoint ;
        $this->stp = $strenghtpoint; 

    }

    // GETTER & SETTER //
    public function getLp(){return $this->lp;}
    public function setLp($lifepoint){$this->lp = $lifepoint;}

    public function getStp(){return $this->stp;}
    public function setStp($strenghtpoint){$this->stp = $strenghtpoint;}

    public function Attack(){} 
}

?>
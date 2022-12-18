<?php

require_once "classCharacter.php" ;

// Class Fille où je créé le joueur et ses LP, FP et le score //


class Player extends Character{

    protected string $pseudo ;
    protected $score ;

    public function __construct($lifepoint, $strenghtpoint, $pseudo, $score){


    parent::__construct($lifepoint, $strenghtpoint) ;
        $this->pseudo = $pseudo ;
        $this->score = $score ;  

    }

          // GETTER & SETTER //
    public function getPseudo(){return $this->pseudo;}
    public function setPseudo($pseudo){$this->pseudo = $pseudo;}

    public function getScore(){return $this->score;}
    public function setScore($score){$this->score = $score;}



    public function SeDeplacer(){

        return $this->pseudo . " avance vers la direction choisie \n" ;
    }

// Fonction Attack afin d'afficher les FP LP du joueur //

    public function Attack(){
    $txt = "PV actuel : "  . $this->pv . "\n";
    $txt.="Force actuelle : " . $this->stp . "\n" ;
    return $txt ;

    }
}


?>
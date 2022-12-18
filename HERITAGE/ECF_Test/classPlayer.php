<?php

// require "classCharacter.php" ;

// class Character {

//     protected $lifepoint ;
//     protected $strenghtpoint ;

//     public function __construct($lifepoint, $strenghtpoint){

//         $this->lp = $lifepoint ;
//         $this->stp = $strenghtpoint; 

//     }

//     public function getLp(){return $this->lp;}
//     public function setLp($lifepoint){$this->lp = $lifepoint;}

//     public function getStp(){return $this->stp;}
//     public function setStp($strenghtpoint){$this->stp = $strenghtpoint;}

//     public function Attack(){}
// }



// abstract class Player extends Character{

   
//     protected string $pseudo ;
//     protected $score ;

//     public function __construct($lifepoint, $strenghtpoint, $pseudo, $score){

//     parent::__construct($lifepoint, $strenghtpoint) ;
//         $this->pseudo = $pseudo ;
//         $this->score = $score ;  

//     }


//     public function getPseudo(){return $this->pseudo;}
//     public function setPseudo($pseudo){$this->pseudo = $pseudo;}

//     public function getScore(){return $this->score;}
//     public function setScore($score){$this->score = $score;}



//     public function SeDeplacer(){
//         $prob = random_int(1,3);
//         if($prob == 1){
//             echo $this->pseudo . " rencontre un monstre \n" ;
            
//         }
//         else{
//             echo $this->pseudo . " tombe sur un bandit manchot \n" ;
//         }
//     }
//      // $monstre = new Personnage(rand(20,100), rand(5,10),"Monstre");
//             // echo $this->monstre . " apparait avec des points de vie à " . $this->lp . " \n " . 
//             // " ainsi qu'une force de : " . $this->stp . "\n" ;

//     public function Attack(){

//     }

//     public function JouerAvecBandit(){}
// }

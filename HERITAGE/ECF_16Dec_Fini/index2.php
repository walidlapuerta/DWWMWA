<?php

require_once "classCharacter.php";
require_once "classPlayer.php";
require_once "classMonster.php";



//  Hello Kesary, j'ai fais de mon mieux pour rendre le code logique et lisible, malheureusement celui-ci ne se lance pas :(
// Malgré mes efforts, je n'ai pas su trouver d'où venait l'erreur, mes excuses pour ce désagrément.

$perso = new Player(100, 20, readline("Entrez un pseudo"), 0);

$monstre = new Monster(rand(20, 100), rand(5, 10), "Monstre");


echo "Votre nom est :" . $player->getPseudo() . "\n";


echo $choix = "0. Afficher le score" . "\n" . "1. Aller vers le Nord"  . "\n" .
    "2. Aller vers le Sud" .  "\n" . "3. Aller vers l'Est" . "\n" . "4. Aller vers l'Ouest"  . "\n";

$choix .= readline("Entrez un choix");



switch ($choix) {
    case "0":
        return "Score de : " . $player->getScore() . "\n";
        break;
    case "1":
        return "Vous allez en direction du ch'Nord";

        echo $player->seDeplacer();

        //  1ère boucle while afin de générer le déplacement du perso tant que ses LP > 0 //
        while ($player->getLp() > 0) {
            $proba = random_int(1, 3);
            return $proba;

            // Si le rand tombe sur 1 alors le monstre apparait et le combat se génère //
            if ($proba == 1) {

                // Affichage des stats des perso grâce à la fonction Attack, les LP, FP des 2 s'affichent //

                echo $player->getPseudo() . " rencontre un monstre \n";


                echo $player->Attack() . "\n";

                echo $monstre->Attack() . "\n";

                // 2ème boucle While afin de générer le combat avec le monstre //
                // Tant que les LP de l'un ou de l'autre ne sont pas à 0 ou en dessous, alors le combat continue //
                while ($monstre->getMonstreLp() <= 0 || $player->getLp() <= 0) {

                    echo $player->getPseudo() . " attaque le monstre de " . $player->getStp() . "\n";

                    $monstre->setMonstreLp($monstre->getMonstreLp() - $player->getStp());

                    echo "Le monstre attaque " . $player->getPseudo() . " de " . $monstre->getMonstreFp() . "\n";

                    $player->setLp($player->getLp() - $monstre->getMonstreFp());

                    // Si le joueur gagne ou perd alors cela s'affiche //
                    if ($player->getLp() > $monstre->getMonstreLp()) {

                        echo $player->getPseudo() . " a gagné face au monstre \n";
                    } else {
                        echo $player->getPseudo() . " a perdu face au monstre \n";
                    }
                }
            } else {

                //S'il ne rencontre pas le monstre, le joueur tombe sur le Bandit Manchot et choisit ou non de jouer //
                echo $player->getPseudo() . " tombe sur un bandit manchot \n";

                echo $choixBandit = readline("Voulez-vous jouer avec le Bandit Manchot pour des PV ? || oui/non \n");


// Si le joueur joue, tant que ses PV > 0, alors il tire au sort un chiffre pour gagner ou perdre des PV //
                if ($choixBandit = "oui") {

                    while ($player->getLp() > 0) {
                        $proba2 = random_int(1, 2);
                        return $proba2;
                        if ($proba2 = 1) {

                            echo "Vous pouvez gagner des PV, tirez une seconde fois pour savoir combien \n";

                            $choix2 =  random_int(1, 2);

                            echo "Nouveau tirage = " . $choix2 . "\n ";
                            if ($choix2 = 1) {

                                $vieSup = random_int(1, 10);
                                echo "Vous gagnez " . $vieSup . " PV supplémentaires \n";

                                $player->setLp($player->getLp() + $vieSup);
                            }
                        } else {
                            echo "Vous perdez des PV, tirez une seconde fois pour savoir combien \n";

                            $vieMoins = random_int(1, 10);
                            echo "Vous perdez " . $vieSup . " PV \n";

                            $player->setLp($player->getLp() - $vieSup);
                        }
                    }
                } 
                else {

                    echo "Vous décidez de ne pas jouer contre le Bandit Manchot \n" ;
                    
                    echo $player->seDeplacer() ;
                }
            }
        }


        break;
    case "2":
        return "Vous allez en direction du Sud";
        break;
    case "3":
        return "Vous allez en direction de l'Est";
        break;
    case "4":
        return "Vous allez en direction de l'Ouest";
        break;
}

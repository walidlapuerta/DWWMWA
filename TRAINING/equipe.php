<?php

require_once "equipe.class.php";

$joueurs = new Joueurs;
// $livremanager->chargementLivres();

ob_start(); ?>


<table class="table text-center">
    <tr class="table-white">
        <th>Joueurs</th>
        <th>Equipe</th>
        <th>Nombre de buts cette saison</th>
        <th>Nombre de passe décisives cette saison</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php $joueurs = $jmanager->getJoueurs();
    for ($i = 0 ; $i <count($joueurs); $i++) { ?>
        <tr>
            <td class="align-middle"><img src="public/images/<?= $livres[$i]->getImage() ?>" width="60px;" alt=""></td>
            <td class="align-middle"><?= $livres[$i]->getNom() ?></td>
            <td class="align-middle"><?= $livres[$i]->getNationalite() ?></td>
            <td class="align-middle"><?= $livres[$i]->getButs() ?></td>
            <td class="align-middle"><?= $livres[$i]->getPassed() ?></td>
            <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
            <td class=" align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
            </td>
        </tr>
    <?php } ?>

</table>
<a href="" class="btn btn-success d-block">Ajouter</a>
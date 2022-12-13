<?php ob_start();

$titre = "Homme ou Femme";
?>

<?php
$identite = [array("nom" => "Séverine", "Age" => "25", "Homme" => "false"), array("nom" => "Luc", "Age" => "36", "Homme" => "true")];
?>


<form action="" method="POST">
    <div class="container border border-dark ">
        <label>Résultat affichage : </label>
        <label></label>
    </div>

</form>


<?php
$content = ob_get_clean();
require "template.php";
?>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <?php for ($i = 1; $i <= 10; $i++) : ?>
        <a class="dropdown-item" href="../../1-facile/exo<?= $i ?>/exoHF.php">exo<?= $i ?></a>
    <?php endfor; ?> -->
</div>
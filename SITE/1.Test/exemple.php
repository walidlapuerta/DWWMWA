<?php ob_start();

$titre = "Ex"; 
?>


test


<?php
$content = ob_get_clean();
require "template.php";

?>
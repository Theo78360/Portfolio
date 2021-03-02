<?php

if (isset($_GET['p'])) {   
    if(file_exists("controleur/".$_GET['p'].".controleur.php"))
        $page = $_GET['p'];
    else
        $page = "404";
} else {
    $page = "accueil";
}

ob_start();
require "controleur/".$page.".controleur.php";
$contents = ob_get_clean();

require "template.php";

?>
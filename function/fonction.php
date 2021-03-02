<?php
    ob_start();
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

function auth($idad){// fonction qui controle si le lvl de l utilisateur est suffisant
    
    if(isset($_SESSION['idad'])== $idad)
        return true;
    else
        header("Location:../vue/connexion.php");
}
?>
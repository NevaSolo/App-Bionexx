<?php
require_once("../Model/Directeur.php");
if(isset($_POST['dir_nom'])AND isset($_POST['dir_email'])AND isset($_POST['dir_mdp'])){
    extract($_POST);
    $dir = new Directeur();
    $dir -> setDirNom($dir_nom);
    $dir -> setDirEmail($dir_email);
    $dir -> setDirMdp($dir_mdp);
    $dir -> update();
    $dir -> create();

    header("Location:../Vue/Directeur/Message/Boite.php");
}
?>
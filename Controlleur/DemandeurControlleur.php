<?php
require_once("../Model/Demandeur.php");
if(isset($_POST['dem_nom'])AND isset($_POST['dem_dep'])AND isset($_POST['dem_email'])AND isset($_POST['dem_mdp'])){
    extract($_POST);
    $dem = new Demandeur();
    $dem -> setDemNom($dem_nom);
    $dem -> setDemDep($dem_dep);
    $dem -> setDemEmail($dem_email);
    $dem -> setDemMdp($dem_mdp);
    $dem -> update();
    $dem -> create();

    header("Location: ../Vue/Utilisateur/Message/Boite.php");
}
?>
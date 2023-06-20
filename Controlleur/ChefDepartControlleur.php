<?php
require_once("../Model/ChefDepart.php");
if(isset($_POST['chef_nom'])AND isset($_POST['chef_dep'])AND isset($_POST['chef_email'])AND isset($_POST['chef_mdp'])){
    extract($_POST);
    $chef = new Chef();
    $chef -> setChefNom($chef_nom);
    $chef -> setChefDep($chef_dep);
    $chef -> setChefEmail($chef_email);
    $chef -> setChefMdp($chef_mdp);
    $chef -> update();
    $chef -> create();

    header("Location:../Vue/Chef_departement/Message/Boite.php");
}
?>
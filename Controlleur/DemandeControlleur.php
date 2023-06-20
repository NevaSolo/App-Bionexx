<?php
require_once("../Model/Demande.php");
require_once("../Model/Article.php");
if(isset($_POST['dm_dateDemande'])AND isset($_POST['dm_departement'])AND isset($_POST['dm_prioriter'])AND isset($_POST['dm_dateLiv'])AND isset($_POST['dm_nom'])AND isset($_POST['dm_typeArticle'])){
    extract($_POST);
    $ar = new Article();
    $dm = new Demande();
    $dm -> setDmDateDemande($dm_dateDemande);
    $dm -> setDmDepartement($dm_departement);
    $dm -> setDmTypeArticle($dm_typeArticle);
    $dm -> setDmPrioriter($dm_prioriter);
    $dm -> setDmDateLiv($dm_dateLiv);
    $dm -> setDmNom($dm_nom);
    $dm -> create();
    $ar-> create();

    header("Location: ../Vue/Utilisateur/Article/Article.php");
}
?>
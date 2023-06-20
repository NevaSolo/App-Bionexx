<?php
require_once("../Model/NomFournisseur.php");
if(isset($_POST['nom_f'])AND isset($_POST['modePay_f'])AND isset($_POST['echeance_f'])){
    extract($_POST);
    $nom = new Nom();
    $nom -> setNom($nom_f);
    $nom -> setModePay($modePay_f);
    $nom -> setEcheance($echeance_f);
    $nom -> create();
    header("Location:../Vue/Administrateur/Requete/Fournisseur.php");
}
?>
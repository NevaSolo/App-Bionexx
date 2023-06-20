<?php
require_once("../Model/Fournisseur.php");
if(isset($_POST['terminer'])AND isset($_POST['f_nom'])AND isset($_POST['f_articleDispo'])AND isset($_POST['f_qte'])AND isset($_POST['f_prix'])){
    extract($_POST);
    $f = new Fournisseur();
    $f -> setFnom($f_nom);
    $f -> setFarticleDispo($f_articleDispo);
    $f -> setFqte($f_qte);
    $f -> setFprix($f_prix);
    $f -> setFmontant($f_qte ,$f_prix);
    $f -> update();
    $f -> create();
    header("Location:../Vue/Administrateur/Message/Boite.php");
}
if(isset($_POST['f_nom'])AND isset($_POST['f_articleDispo'])AND isset($_POST['f_qte'])AND isset($_POST['f_prix'])AND isset($_POST['f_modePay'])AND isset($_POST['f_echeance'])){
    extract($_POST);
    $f = new Fournisseur();
    $f -> setFnom($f_nom);
    $f -> setFarticleDispo($f_articleDispo);
    $f -> setFqte($f_qte);
    $f -> setFprix($f_prix);
    $f -> setFmontant($f_qte ,$f_prix);
    $f -> setFecheance($f_echeance);
    $f -> setFmodePay($f_modePay);
    $f -> update();
    $f -> create();
    header("Location:../Vue/Administrateur/Requete/Fournisseur.php");
}

?>
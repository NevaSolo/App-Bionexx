<?php
require_once("../../Model/Connexion.php");

if(isset($_POST['ad_nom'])and isset($_POST['ad_mdp'])){
    $ad_nom = $_POST['ad_nom'];
    $ad_mdp = $_POST['ad_mdp'];

    $base = Connection::getConnection();

    $requete = "SELECT * FROM admins WHERE ad_nom = ? AND ad_mdp = ?";
    $etat = $base -> prepare($requete);
    $etat -> execute(array($ad_nom, $ad_mdp));

    if($etat -> rowCount() > 0){
        $_SESSION['ad_nom'] = $ad_nom;
        $_SESSION['ad_id'] = $etat -> fetch()['id_ad'];
        header("Location:../../Vue/Administrateur/Message/Boite.php");
    }
    else{
        header("Location:../../Vue/Administrateur/AdminError.php");
    }
}
?>
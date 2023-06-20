<?php
require_once("../../Model/Connexion.php");
require_once("../../Model/Demande.php");
if(isset($_POST['dem_nom'])AND isset($_POST['dm_nom'])AND isset($_POST['dem_mdp'])){
    extract($_POST);
    $dm = new Demande();
    $dm -> setDmNom($dm_nom);
    $dem_nom = $_POST['dem_nom'];
    $dem_mdp = $_POST['dem_mdp'];
    

    $base = Connection::getConnection(); 

    $requete = "SELECT * FROM demandeur WHERE dem_nom = ? AND dem_mdp = ?";
    $etat = $base-> prepare($requete);
    $etat -> execute (array($dem_nom, $dem_mdp));

    if($etat -> rowCount()> 0 ){
        $_SESSION['dem_nom'] = $dem_nom;
        $_SESSION['dem_mdp'] = $dem_mdp;
        $_SESION['dem_id'] = $etat -> fetch()['dem_id'];
        header("Location: ../../Vue/Utilisateur/Message/Boite.php");
    }
    else{
        header("Location: ../../Vue/Utilisateur/LoginError.php");
    }
    
}
?>
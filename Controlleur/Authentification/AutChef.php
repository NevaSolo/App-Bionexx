<?php
require_once("../../Model/Connexion.php");

if(isset($_POST['chef_nom'])AND isset($_POST['chef_mdp'])){
    $chef_nom = $_POST['chef_nom'];
    $chef_mdp = $_POST['chef_mdp'];

    $base = Connection::getConnection(); 

    $requete = "SELECT * FROM chefdepart WHERE chef_nom = ? AND chef_mdp = ?";
    $etat = $base-> prepare($requete);
    $etat -> execute (array($chef_nom, $chef_mdp));

    if($etat -> rowCount()> 0 ){
        $_SESSION['chef_nom'] = $chef_nom;
        $_SESSION['chef_mdp'] = $chef_mdp;
        $_SESION['chef_id'] = $etat -> fetch()['chef_id'];
        header("Location: ../../Vue/Chef_departement/Message/Boite.php");
    }
    else{
        header("Location: ../../Vue/Chef_departement/ChefError.php");
    }
    
}
?>
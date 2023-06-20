<?php
require_once("../../Model/Connexion.php");

if(isset($_POST['dir_nom'])and isset($_POST['dir_mdp'])){
    $dir_nom = $_POST['dir_nom'];
    $dir_mdp = $_POST['dir_mdp'];

    $base = Connection::getConnection();

    $requete = "SELECT * FROM directeur WHERE dir_nom = ?  AND dir_mdp = ?";
    $etat = $base -> prepare($requete);
    $etat -> execute(array($dir_nom, $dir_mdp));

    if($etat -> rowCount() > 0){
        $_SESSION['dir_nom'] = $dir_nom;
        $_SESSION['dir_mdp'] = $dir_mdp;
        $_SESSION['dir_id'] = $etat -> fetch()['id_ad'];
        Header("Location:../../Vue/Directeur/Message/Boite.php");
    }
    else{
        Header("Location:../../Vue/Directeur/DirecteurError.php");
    }
}
?>
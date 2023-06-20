<?php
//Directeur
if(isset($_POST['dirco'])){
    extract($_POST);
    header("Location: ../Vue/Directeur/Directeur.php");
    
}
if(isset($_POST['dirin'])){
    extract($_POST);
    header("Location: ../Vue/Directeur/Enregistrement.php");
}

//Admin
if(isset($_POST['adco'])){
    extract($_POST);
    header("Location: ../Vue/Administrateur/Admin.php");
    
}
if(isset($_POST['adin'])){
    extract($_POST);
    header("Location: ../Vue/Administrateur/Enregistrement.php");
}

//chef
if(isset($_POST['chefco'])){
    extract($_POST);
    header("Location: ../Vue/Chef_departement/Chef.php");
    
}
if(isset($_POST['chefin'])){
    extract($_POST);
    header("Location: ../Vue/Chef_departement/Enregistrement.php");
}

//Utilisateur
if(isset($_POST['utco'])){
    extract($_POST);
    header("Location: ../Vue/Utilisateur/Login.php");
    
}
if(isset($_POST['utin'])){
    extract($_POST);
    header("Location: ../Vue/Utilisateur/Enregistrement.php");
}
?>
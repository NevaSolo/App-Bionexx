<?php
//Directeur
if(isset($_GET['dirco'])){
    extract($_GET);
    header("Location: ../Vue/Directeur/Directeur.php");
    
}
if(isset($_GET['dirin'])){
    extract($_GET);
    header("Location: ../Vue/Directeur/Enregistrement.php");
}

//Admin
if(isset($_GET['adco'])){
    extract($_GET);
    header("Location: ../Vue/Administrateur/Admin.php");
    
}
if(isset($_GET['adin'])){
    extract($_GET);
    header("Location: ../Vue/Administrateur/Enregistrement.php");
}

//chef
if(isset($_GET['chefco'])){
    extract($_GET);
    header("Location: ../Vue/Chef_departement/Chef.php");
    
}
if(isset($_GET['chefin'])){
    extract($_GET);
    header("Location: ../Vue/Chef_departement/Enregistrement.php");
}

//Utilisateur
if(isset($_GET['utco'])){
    extract($_GET);
    header("Location: ../Vue/Utilisateur/Login.php");
    
}
if(isset($_GET['utin'])){
    extract($_GET);
    header("Location: ../Vue/Utilisateur/Enregistrement.php");
}
?>

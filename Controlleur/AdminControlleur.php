<?php
require_once("../Model/Admin.php");
if(isset($_POST['ad_nom'])AND isset($_POST['ad_email'])AND isset($_POST['ad_mdp'])){
    extract($_POST);
    $ad = new Admin();
    $ad -> setAdnom($ad_nom);
    $ad -> setAdemail($ad_email);
    $ad -> setAdmdp($ad_mdp);
    $ad -> update();
    $ad -> create();

    header("Location:../Vue/Administrateur/Message/Boite.php");
}
?>
<?php
require_once("../Model/Article.php");
if(isset($_POST['ar_nomdem'])AND isset($_POST['ar_article'])AND isset($_POST['ar_qte'])AND isset($_POST['ar_date'])AND isset($_POST['ar_dateLiv'])AND isset($_POST['ar_num'])){
    extract($_POST);
    $ar = new Article();
    $ar -> setArNom($ar_nomdem);
    $ar -> setArarticle($ar_article);
    $ar -> setArqte($ar_qte);
    $ar -> setArDate($ar_date);
    $ar -> setArDateLiv($ar_dateLiv);
    $ar -> setArNum($ar_num);
    $ar -> update();
    $ar -> create();
    header("Location: ../Vue/Utilisateur/Article/Article.php");
}
if(isset($_POST['terminer'])){
    extract($_POST);
    echo "merci pour votre demande";
    header("Location:../Vue/Utilisateur/Message/Boite.php");

}

?>
<?php
require_once("../Model/Achat.php");
if(isset($_POST['a_nom'])AND isset($_POST['a_article'])AND isset($_POST['a_date'])){
    extract($_POST);
    $a = new Achat();
    $a -> setAnom($a_nom);
    $a -> setAarticle($a_articel);
    $a -> setAdate($a_date);
    $a -> update();
    $a -> create();
}
?>
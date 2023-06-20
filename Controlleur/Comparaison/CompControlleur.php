<?php
require_once("../../Model/Fournisseur.php");
if(isset($_POST['f_nom1'])AND isset($_POST['f_nom2'])){
    extract($_POST);
    $f = new Fournisseur();
    $f -> setFnom1($f_nom1);
    $f -> setFnom2($f_nom2);
    $f -> comparaison();
}
?>
<?php
require_once("../../Model/Article.php");
$prospection = "en prospection";
if(isset($_POST['ar_nomdem'])AND isset($_POST['ar_date'])AND isset($_POST['ar_dateLiv'])){
            extract($_POST);
            $ar = new Article();
            $ar -> setArNom($ar_nomdem);
            $ar -> setArDate($ar_date);
            $ar -> setArDateLiv($ar_dateLiv);
            $ar -> voir();
}

        ?>
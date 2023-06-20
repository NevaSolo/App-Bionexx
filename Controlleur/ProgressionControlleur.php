<?php
require_once("../Model/Situation.php");
if(isset($_POST['s_nom'])){
    extract($_POST);
    $s = new Situation();
    $s -> setSnom($s_nom);
    $s -> voir();
}
?>
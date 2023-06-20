<?php
require_once("../Model/Situation.php");
if(isset($_POST['s_nom'])AND isset($_POST['s_dateDemande'])AND isset($_POST['s_typeArticle'])AND isset($_POST['s_dateLiv'])AND isset($_POST['s_situation'])){
    extract($_POST);
    $s = new Situation();
    $s -> setSnom($s_nom);
    $s -> setSdateDemande($s_dateDemande);
    $s -> setSdateLiv($s_dateLiv);
    $s -> setStypeArticle($s_typeArticle);
    $s -> setSituation($s_situation);
    $s -> create();
    $s -> update();
}
?>
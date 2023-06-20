<?php
use Dompdf\Dompdf;
//Demandeur
if(isset($_POST['donwdem'])){
    extract($_POST);
    header("Location:../Vue/Administrateur/Telechargement/TelechargementDemande.php");
    if(isset($_POST['dempdf'])){
        extract($_POST);
    ob_start();
    require_once("../PDF/Demande.php");
    $html = ob_get_contents();
    ob_end_clean();
    require_once("../dompdf/autoload.inc.php");
    $dompdf = new Dompdf();
    $dompdf -> loadHtml($html);
    $fichier = 'Liste des demande';
    $dompdf -> render();
    $dompdf -> stream($fichier);
    }
}
//Demande
if(isset($_POST['donwdm'])){
    extract($_POST);
    header("Location:../Vue/Administrateur/Telechargement/TelechargementDemandeur.php");
if(isset($_POST['dempdf'])){
extract($_POST);
ob_start();
require_once("../PDF/Demandeur.php");
$html = ob_get_contents();
ob_end_clean();
require_once("../dompdf/autoload.inc.php");
$dompdf = new Dompdf();
$dompdf -> loadHtml($html);
$fichier = 'Liste des demandeurs';
$dompdf -> render();
$dompdf -> stream($fichier);
}
}

//comparaison
if(isset($_POST['donwfou'])){
    extract($_POST);
    header("Location:../Vue/Administrateur/Telechargement/TelechargementCom.php");
}
if(isset($_POST['foupdf'])){
extract($_POST);
ob_start();
require_once("../PDF/Comparaison.php");
$html = ob_get_contents();
ob_end_clean();
require_once("../dompdf/autoload.inc.php");
$dompdf = new Dompdf();
$dompdf -> loadHtml($html);
$fichier = 'Liste des Fournisseurs';
$dompdf -> render();
$dompdf -> stream($fichier);

}

?>
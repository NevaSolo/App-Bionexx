<?php
use Dompdf\Dompdf;
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
?>
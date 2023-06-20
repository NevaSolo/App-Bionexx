<?php
use Dompdf\Dompdf;
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
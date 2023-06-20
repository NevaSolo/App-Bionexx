<?php
require_once '../PHPExcel/PHPExcel.php';
// Inclure la bibliothèque PHPExcel
//require_once('../PHPExcel/Classes/PHPExcel.php');
require_once('../Model/Connexion.php');
// Connexion à la base de données
$base = Connection::getConnection();

// Récupérer les données de la base de données
$stmt = $base->prepare("SELECT * FROM Demande");
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Créer un objet Excel
$objPHPExcel = new PHPExcel();

// Définir les propriétés du document
$objPHPExcel->getProperties()->setCreator('Nom de l\'auteur')
                             ->setLastModifiedBy('Nom de l\'auteur')
                             ->setTitle('Titre du document')
                             ->setSubject('Sujet du document')
                             ->setDescription('Description du document')
                             ->setKeywords('Mots clés')
                             ->setCategory('Catégorie');

// Ajouter les données à la feuille de calcul
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'ID')
            ->setCellValue('B1', 'Nom')
            ->setCellValue('C1', 'date De la demande')
            ->setCellValue('D1', 'departement')
            ->setCellValue('E1', 'type Article')
            ->setCellValue('F1', 'Prioriter')
            ->SetCellValue('G1', 'Date de Livraison');

$row = 2;
foreach($data as $item) {
    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A'.$row, $item['dm_id'])
                ->setCellValue('B'.$row, $item['dm_nom'])
                ->setCellValue('C'.$row, $item['dm_dateDemande'])
                ->setCellValue('D'.$row, $item['dm_departement'])
                ->setCellValue('E'.$row, $item['dm_typeArticle'])
                ->setCellValue('F'.$row, $item['dm_prioriter'])
                ->setCellValue('G'.$row, $item['dm_dateLiv']);
    $row++;
}

// Définir le nom du fichier
$filename = 'Demande.xls';

// Envoyer le fichier à l'utilisateur en téléchargement
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="'.$filename.'"');
header('Cache-Control: max-age=0');
PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007')->save('php://output');
exit;




// Initialisation de la bibliothèque PHPExcel



?>
<?php
require_once '../PHPExcel/PHPExcel.php';
// Inclure la bibliothèque PHPExcel
//require_once('../PHPExcel/Classes/PHPExcel.php');
require_once('../Model/Connexion.php');
// Connexion à la base de données
$base = Connection::getConnection();

// Récupérer les données de la base de données
$stmt = $base->prepare("SELECT * FROM Demandeur");
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
            ->setCellValue('A1', 'Nom')
            ->setCellValue('B1', 'Departement')
            ->setCellValue('C1', 'Email');

$row = 2;
foreach($data as $item) {
    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A'.$row, $item['dem_nom'])
                ->setCellValue('B'.$row, $item['dem_dep'])
                ->setCellValue('C'.$row, $item['dem_email']);
    $row++;
}

// Définir le nom du fichier
$filename = 'Demandeur.xls';

// Envoyer le fichier à l'utilisateur en téléchargement
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="'.$filename.'"');
header('Cache-Control: max-age=0');
PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007')->save('php://output');
exit;




// Initialisation de la bibliothèque PHPExcel



?>
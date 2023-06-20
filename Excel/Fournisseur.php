<?php
require_once '../PHPExcel/PHPExcel.php';
// Inclure la bibliothèque PHPExcel
//require_once('../PHPExcel/Classes/PHPExcel.php');
require_once('../Model/Connexion.php');
// Connexion à la base de données
$base = Connection::getConnection();

// Récupérer les données de la base de données
$stmt = $base->prepare("SELECT * FROM fournisseur");
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
            ->setCellValue('C1', 'Article Disponible')
            ->setCellValue('D1', 'Quantite')
            ->setCellValue('E1', 'Prix Unitaire')
            ->setCellValue('F1', 'Montant')
            ->SetCellValue('G1', 'Mode de payement')
            ->SetCellValue('H1', 'Echeance');

$row = 2;
foreach($data as $item) {
    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A'.$row, $item['f_id'])
                ->setCellValue('B'.$row, $item['f_nom'])
                ->setCellValue('C'.$row, $item['f_articleDispo'])
                ->setCellValue('D'.$row, $item['f_qte'])
                ->setCellValue('E'.$row, $item['f_prix'])
                ->setCellValue('F'.$row, $item['f_montant'])
                ->setCellValue('G'.$row, $item['f_modePay'])
                ->setCellValue('H'.$row, $item['f_echeance']);
    $row++;
}

// Définir le nom du fichier
$filename = 'Fournisseur.xls';

// Envoyer le fichier à l'utilisateur en téléchargement
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="'.$filename.'"');
header('Cache-Control: max-age=0');
PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007')->save('php://output');
exit;




// Initialisation de la bibliothèque PHPExcel



?>
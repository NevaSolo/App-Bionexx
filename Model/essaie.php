<?php
require_once("Connexion.php");
$base = Connection::getConnection();
$requete = "SELECT SUM(f_montant) FROM fournisseur WHERE f_nom ='PREMIER PLUS'";
$stmt = $base->query($requete);
$rows = $stmt-> fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row){
    echo $row['f_nom'].''.$row['f_montant'].'<br>';
}
?>
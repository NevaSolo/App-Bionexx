<?php
require_once("../Model/Connexion.php");
$base = Connection::getConnection();
$requete = "SELECT * FROM fournisseur;";
$etat = $base->prepare($requete);
$etat->execute();
$resultat = $etat->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des fourniseur</h1>
<table border="1px">
            <thead>
                <tr>
                    <th>Nom fournisseur</th>
                    <th>Article dispo</th>
                    <th>Quantite</th>
                    <th>Prix</th>
                    <th>Montant</th>
                    <th>echeance</th>
                    <th>Mode de payement</th>
                </tr>
            </thead>
            <?php foreach($resultat as $resultat):?>
            <tbody>
                <tr>
                    <td><?=$resultat['f_nom']?></td>
                    <td><?=$resultat['f_articleDispo']?></td>
                    <td><?=$resultat['f_qte']?></td>
                    <td><?=$resultat['f_prix']?></td>
                    <td><?=$resultat['f_montant']?></td>
                    <td><?=$resultat['f_echeance']?></td>
                    <td><?=$resultat['f_modePay']?></td>
                </tr>
            </tbody>
            <?php endforeach;?>
        </table>
</body>
</html>
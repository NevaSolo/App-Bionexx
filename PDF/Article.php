<?php
require_once("../Model/Connexion.php");
$base = Connection::getConnection();
$requete = "SELECT * FROM article;";
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
    <h1></h1>
<table border="1px">
            <thead>
                <tr>
                <th>Nom-demandeur</th>
                    <th>Date de la demande</th>
                    <th>Département</th>
                    <th>Type d'article</th>
                    <th>Priorité</th>
                    <th>Date de Livraison</th>
                </tr>
            </thead>
            <?php foreach($resultat as $resultat):?>
            <tbody>
                <tr>
                    <td><?=$resultat['dm_nom']?></td>
                    <td><?=$resultat['dm_dateDemande']?></td>
                    <td><?=$resultat['dm_departement']?></td>
                    <td><?=$resultat['dm_typeArticle']?></td>
                    <td><?=$resultat['dm_prioriter']?></td>
                    <td><?=$resultat['dm_dateLiv']?></td>
                </tr>
            </tbody>
            <?php endforeach;?>
        </table>
</body>
</html>
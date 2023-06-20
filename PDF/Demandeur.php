<?php
require_once("../Model/Connexion.php");
$base = Connection::getConnection();
$requete = "SELECT * FROM demandeur;";
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
    <h1>Liste des demandeurs</h1>
<table border="1px">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                </tr>
            </thead>
            <?php foreach($resultat as $resultat):?>
            <tbody>
                <tr>
                    <td><?=$resultat['dem_nom']?></td>
                    <td><?=$resultat['dem_email']?></td>
                </tr>
            </tbody>
            <?php endforeach;?>
        </table>
</body>
</html>
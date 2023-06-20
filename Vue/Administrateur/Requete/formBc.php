<?php
require_once("../../../Model/Connexion.php");

$base = Connection::getConnection();
$requete = "SELECT * FROM demande;";
$etat = $base->prepare($requete);
$etat->execute();
$resultat = $etat->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>formuleBC</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <hr>
    <p class="lead" style="text-align: center;font-weight: bold;">Choisir la demande a faire en BC:</p>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Numero Du demande</th>
                                <th>Nom du demandeur</th>
                                <th>Département Du demandeur</th>
                                <th>Prioriter</th>
                                <th>Date de Livraison</th>
                            </tr>
                        </thead>
                        <?php
                        foreach($resultat as $res):
                            ?>
                            <form action="Bc.php" method="post">
                        <tbody>
                            <tr>
                                <td><input type="text" name="num" style="border-width: 0px;"value="<?=$res['dm_id']?>"></td>
                                <td><input type="text" name="demandeur" style="border-width: 0px;"value="<?=$res['dm_nom']?>"></td>
                                <td><input type="text" name="departement" style="border-width: 0px;"value="<?=$res['dm_departement']?>"></td>
                                <td><input type="text" name="prioriter" style="border-width: 0px;"value="<?=$res['dm_prioriter']?>"></td>
                                <td><input type="text" name="date" style="border-width: 0px;"value="<?=$res['dm_dateLiv']?>"></td>
                                <td><button class="btn btn-primary" type="submit">Faire Le BC</button></td>
                            </tr>
                            <tr></tr>
                        </tbody>
                        </form>
                        <?php
                        endforeach;
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
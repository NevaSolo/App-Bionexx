<?php
$num = $_POST['num'];
$date = $_POST['date'];
$dem = $_POST['demandeur'];
$dep = $_POST['departement'];
$prio = $_POST['prioriter'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BC</title>
    <link rel="stylesheet" href="assets3/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets3/css/styles.css">
</head>

<body>
    <form action="../../../Controlleur/BCControlleur.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <picture><img class="img-fluid" src="assets3/img/Bionexx.jpg" style="width: 150px;"></picture>
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <p style="font-weight: bold;">BIONEXX S.A</p>
                                <div><label class="form-label">Tana Water Front</label></div>
                                <div><label class="form-label">(inject Building 2nd Floor)</label></div>
                                <div><label class="form-label">Ambodivona</label></div>
                                <div><label class="form-label">101 Antananarivo</label></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="background: rgb(255,255,255);">
                <div>
                    <div class="card">
                        <div class="card-header">
                            <div><label class="form-label" style="font-weight: bold;">Gestionnaire:<input type="text" name="bc_gestionnaire"value="<?php echo $dem;?>"></label></div>
                            <div><label class="form-label" style="font-weight: bold;">N EB:<input type="text" name="bc_eb"value="<?php echo $prio;?>"></label></div>
                            <div><label class="form-label" style="font-weight: bold;">Demandeur:<input type="text" name="bc_demandeur"value="<?php echo $dep;?>"></label></div>
                            <div><label class="form-label" style="font-weight: bold;">Affectation:<input type="text" name="bc_affectation"></label></div>
                            <div><label class="form-label" style="font-weight: bold;">Date de Livraison:<input type="date" name="bc_dateLiv"value="<?php echo $date;?>"></label></div>
                            <div><label class="form-label" style="font-weight: bold;">Type d'achat:<input type="text" name="bc_achat"></label></div>
                            <div><label class="form-label" style="font-weight: bold;">Incoterm:<input type="text" name="bc_incoterm"></label></div>
                            <div><label class="form-label" style="font-weight: bold;">Mode expédition:<input type="text" name="bc_modeExp"></label></div>
                            <div><label class="form-label" style="font-weight: bold;">Délai de disponibilité:<input type="text" name="bc_delai"></label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <p class="lead text-start" style="font-size: 36px;">Bon de commande</p>
                </div>
                <div>
                    <p class="lead text-start" style="font-size: 20px;font-weight: bold;">en US$</p>
                </div>
                <div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead style="border-color: rgb(255,255,255);">
                                <tr>
                                    <th style="border-width: 0px;background: #ebebeb;border-radius: 24px;">N BC</th>
                                    <th style="border-width: 0px;border-radius: 24px;background: #ebebeb;">N INVEST</th>
                                    <th style="border-width: 0px;background: #ebebeb;border-radius: 24px;">CODE D'AFFAIRE</th>
                                </tr>
                            </thead>
                            <tbody style="border-width: 0px;">
                                <tr>
                                    <td style="border-width: 0px;"><input type="text" name="bc_num"></td>
                                    <td style="border-width: 0px;"><input type="text" name="bc_invest"></td>
                                    <td style="border-width: 0px;"><input type="text" name="bc_code"></td>
                                    <td style="border-width: 0px;"></td>
                                </tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div><label class="form-label">Date:<input type="date" name="bc_date"value="<?php echo $date;?>"></label></div>
                <div>
                    <div class="card">
                        <div class="card-header"><input type="text" placeholder="Fournisseurs" name="bc_fournisseur">
                            <div>
                                <p><br>Immeuble Lam Seck<br>Ampasambazaha RN7<br>301 Fianarantsoa<br>nralaza.trading@gmarl.com<br>NIF<br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" value="Envoyer">
    <script src="assets3/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
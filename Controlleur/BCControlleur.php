<?php
require_once("../Model/BC.php");
require_once("../Model/Connexion.php");
//variable fournisseur
$bc_fournisseur = $_POST['bc_fournisseur'];

$base = Connection::getConnection();
$requete = "SELECT * FROM boncommande;";
$etat = $base->prepare($requete);
$etat->execute();
$resultat = $etat->fetchAll();


$requete1 = "SELECT * FROM fournisseur WHERE f_nom=:f_nom";
$etat1 = $base->prepare($requete1);
$etat1->execute(['f_nom'=>$bc_fournisseur]);
$resultat1 = $etat1->fetchAll();
if(isset($_POST['bc_num'])AND isset($_POST['bc_invest'])AND isset($_POST['bc_code'])AND isset($_POST['bc_date'])AND isset($_POST['bc_fournisseur'])AND isset($_POST['bc_gestionnaire'])AND isset($_POST['bc_eb'])AND isset($_POST['bc_demandeur'])AND isset($_POST['bc_affectation'])AND isset($_POST['bc_dateLiv'])AND isset($_POST['bc_achat'])AND isset($_POST['bc_incoterm'])AND isset($_POST['bc_modeExp'])AND isset($_POST['bc_delai'])){
    extract($_POST);
    $bc = new bc();
    $bc -> setBcNum($bc_num);
    $bc -> setBcInvest($bc_invest);
    $bc -> setBcCode($bc_code);
    $bc -> setBcDate($bc_date);
    $bc -> setBcFournisseur($bc_fournisseur);
    $bc -> setBcGestionnaire($bc_gestionnaire);
    $bc -> setBcEb($bc_eb);
    $bc -> setBcDemandeur($bc_demandeur);
    $bc -> setBcAffectation($bc_affectation);
    $bc -> setBcDateLiv($bc_dateLiv);
    $bc -> setBcAchat($bc_achat);
    $bc -> setBcIncoterm($bc_incoterm);
    $bc -> setBcModeExp($bc_modeExp);
    $bc -> setBcDelai($bc_delai);
    $bc -> create();

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BC (copy)</title>
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/css/styles.css">
</head>
<?php
foreach($resultat as $res):
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <picture><img class="img-fluid" src="assets2/img/Bionexx.jpg" style="width: 150px;"></picture>
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
                            <div><label class="form-label" style="font-weight: bold;">Gestionnaire:<?=$res['bc_gestionnaire']?></label></div>
                            <div><label class="form-label" style="font-weight: bold;">N Eb:<?=$res['bc_eb']?></label></div>
                            <div><label class="form-label" style="font-weight: bold;">Demandeur:<?=$res['bc_demandeur']?></label></div>
                            <div><label class="form-label" style="font-weight: bold;">Affectation:<?=$res['bc_affectation']?></label></div>
                            <div><label class="form-label" style="font-weight: bold;">Date de Livraison:<?=$res['bc_dateLiv']?></label></div>
                            <div><label class="form-label" style="font-weight: bold;">Type d'achat:<?=$res['bc_achat']?></label></div>
                            <div><label class="form-label" style="font-weight: bold;">Incoterm:<?=$res['bc_incoterm']?></label></div>
                            <div><label class="form-label" style="font-weight: bold;">Mode expédition:<?=$res['bc_modeExp']?></label></div>
                            <div><label class="form-label" style="font-weight: bold;">Délai de disponibilité:<?=$res['bc_delai']?></label></div>
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
                                    <td style="border-width: 0px;"><?=$res['bc_num']?></td>
                                    <td style="border-width: 0px;"><?=$res['bc_invest']?></td>
                                    <td style="border-width: 0px;"><?=$res['bc_code']?></td>
                                    <td style="border-width: 0px;"></td>
                                </tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div><label class="form-label">Date:<?=$res['bc_date']?></label></div>
                <div>
                    <div class="card">
                        <div class="card-header">
                            <p><?=$res['bc_fournisseur']?></p>
                            <div>
                                <p><br>Immeuble Lam Seck<br>Ampasambazaha RN7<br>301 Fianarantsoa<br>nralaza.trading@gmarl.com<br>NIF<br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="height: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead style="border-radius: 0px;">
                            <tr style="background: #ebebeb;border-radius: 0px;">
                                <th style="border-width: 0px;">Référence</th>
                                <th>Reference fournisseur</th>
                                <th>Désignation</th>
                                <th><br>N' et date de la DA<br></th>
                                <th>Quantité</th>
                                <th>Unité</th>
                                <th>Prix unitaire</th>
                                <th>Prix totale</th>
                            </tr>
                        </thead>
                        <?php
                        foreach($resultat1 as $res1):
                        ?>
                        <tbody>
                            <tr>
                                <td><?=$res1['f_id']?></td>
                                <td></td>
                                <td><?=$res1['f_articleDispo']?></td>
                                <td></td>
                                <td><?=$res1['f_qte']?></td>
                                <td>Piece</td>
                                <td><?=$res1['f_prix']?></td>
                                <td><?=$res1['f_montant']?></td>
                                
                            </tr>
                            <tr></tr>
                        </tbody>
                        <?php
                        endforeach;
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>
    <script src="assets2/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
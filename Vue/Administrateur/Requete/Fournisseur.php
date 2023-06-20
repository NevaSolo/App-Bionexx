<?php
require_once("../../../Model/Article.php");
require_once("../../../Model/Article.php");
$ar = new Article();
require_once("../../../Model/Connexion.php");
$base = Connection::getConnection();
$requete = "SELECT * FROM nomfournisseur;";
$etat = $base->prepare($requete);
$etat->execute();
$resultat = $etat->fetchAll();

$base1 = Connection::getConnection();
$requete1 = "SELECT * FROM Fournisseur;";
$etat1 = $base1->prepare($requete1);
$etat1->execute();
$resultat1 = $etat1->fetchAll();

$base2 = Connection::getConnection();
$requete2 = "SELECT * FROM demande;";
$etat2 = $base2->prepare($requete2);
$etat2->execute();
$resultat2 = $etat2->fetchAll();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav" style="height: 75px;">
        <div class="container"><a class="navbar-brand" href="#page-top">Bionexx</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="Comparaison.php">Comparaison</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="../Message/Boite.php">Boite de reception</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="../../../Mail/Mail.php">Email</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <section id="contact-2">
                    <div class="container">
                        <h2 class="text-uppercase text-center text-secondary mb-0">Les fournisseur s'affichera ici</h2>
                        <hr class="star-dark mb-5">
                        <div class="row">
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Article Dispo</th>
                                                <th>Quantiter</th>
                                                <th>Prix</th>
                                                <th>Totale</th>
                                            </tr>
                                        </thead>
                                        <?php
                            foreach($resultat1 as $resultat1):
                            ?>
                            <tbody> 
                                <tr>
                                    <td><?=$resultat1['f_nom']?></td>
                                    <td><?=$resultat1['f_articleDispo']?></td>
                                    <td><?=$resultat1['f_qte']?></td>
                                    <td><?=$resultat1['f_prix']?></td>
                                    <td><?=$resultat1['f_montant']?></td>
                                    
                                </tr>
                                <tr></tr>
                            </tbody>
                            <?php endforeach;?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section id="contact-3">
                    <div class="container">
                        <h2 class="text-uppercase text-center text-secondary mb-0">Les article demander</h2>
                        <hr class="star-dark mb-5">
                        <div class="row">
                            <div class="col">
                            <div class="table-responsive">
                        <table class="table">
                            <?php
            if(isset($_POST['ar_nomdem'])AND isset($_POST['ar_date'])AND isset($_POST['ar_dateLiv'])){
                extract($_POST);
                $ar = new Article();
                $ar -> setArNom($ar_nomdem);
                $ar -> setArDate($ar_date);
                $ar -> setArDateLiv($ar_dateLiv);
                $ar -> voir();
            }
            ?>
                        </table>
                    </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <section id="contact-1">
                    <div class="container">
                        <h2 class="text-uppercase text-center text-secondary mb-0">Fournisseur</h2>
                        <hr class="star-dark mb-5">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <?php foreach($resultat as $resultat){}?>
                                <form id="contactForm-1" name="sentMessage" novalidate="novalidate"method="post"action="../../../Controlleur/FournisseurControlleur.php">
                                    <div class="control-group">
                                        <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="text" id="name-1" required="" placeholder="Nom" name="f_nom"value="<?= $resultat['nom_f']?>"><label class="form-label">Nom du fournisseur</label><small class="form-text text-danger help-block"></small></div>
                                    </div>
                                    <div class="control-group">
                                        <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="text" id="name-7" required="" placeholder="Echeance" name="f_echeance"value="<?= $resultat['echeance_f']?>"><label class="form-label">Echeance</label><small class="form-text text-danger help-block"></small></div>
                                    </div>
                                    <div class="control-group">
                                        <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="text" id="name-6" required="" placeholder="Mode payement" name="f_modePay"value="<?= $resultat['modePay_f']?>"><label class="form-label">Mode payement</label><small class="form-text text-danger help-block"></small></div>
                                    </div>
                                    <div class="control-group">
                                        <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="text" id="name-5" required="" placeholder="Article Disponible" name="f_articleDispo"><label class="form-label">Article disponible</label><small class="form-text text-danger help-block"></small></div>
                                    </div>
                                    <div class="control-group">
                                        <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="text" id="name-4" required="" placeholder="Quantite" name="f_qte"><label class="form-label">Quantité</label><small class="form-text text-danger help-block"></small></div>
                                    </div>
                                    <div class="control-group">
                                        <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="text" id="name-3" required="" placeholder="Prix unitaite" name="f_prix"><label class="form-label">Prix</label><small class="form-text text-danger help-block"></small></div>
                                    </div>
                                    <div id="success-1"></div>
                                    <div><button class="btn btn-primary btn-xl" id="sendMessageButton-1" type="submit">Ajouter une Article</button></div>
                                    <br>
                                    <div><a href="..\Message\Boite.php" class="btn btn-primary btn-xl" id="sendMessageButton-1">terminer</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section id="contact">
                    <div class="container">
                        <h2 class="text-uppercase text-center text-secondary mb-0">les demandes</h2>
                        <hr class="star-dark mb-5">
                        <div class="row">
                        <table class="table" border="1px">
            <thead>
                <tr>
                    <th>Numero d'achat</th>
                    <th>Nom-demandeur</th>
                    <th>Date de la demande</th>
                    <th>Type d'article</th>
                    <th>Date de Livraison</th>
                </tr>
            </thead>
            <?php foreach($resultat2 as $resultat):?>
                <form action="" method="post">
            <tbody>
                <tr>
                    <td>Numero <?=$resultat['dm_id']?></td>
                    <td><i class="fa fa-user-plus"></i><input type="text" style="background: #b3ffb6;border-width: 0px;" name="ar_nomdem"value="<?= $resultat['dm_nom']?>"></td>
                    <td><i class="fa fa-calendar-times-o"></i><input type="text" style="background: #b3ffb6;border-width: 0px;" name="ar_date"value="<?= $resultat['dm_dateDemande']?>"></td>
                    <td><i class="far fa-plus-square"></i><?= $resultat['dm_typeArticle']?><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Voir</button>
                    <td><input type="text" style="background: #b3ffb6;border-width: 0px;" name="ar_dateLiv"value="<?= $resultat['dm_dateLiv']?>"></td>
            </tr>
            </tbody>
            </form>
            <?php endforeach;?>
            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>
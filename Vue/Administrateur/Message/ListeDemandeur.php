<?php
require_once("../../../Model/Connexion.php");

        $base = Connection::getConnection();
        $requete = "SELECT * FROM demandeur;";
        $etat = $base->prepare($requete);
        $etat->execute();
        $resultat = $etat->fetchAll();
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
        <div class="container"><a class="navbar-brand" href="#page-top">BIONEXX</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="../Requete/NomFournisseur.php">FOURNISSEUR</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="../../../Mail/Mail.php">EMAIL</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="../Telechargement/TelechargementDemandeur.php">Telecharger</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="contact">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Liste des demandeur</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nom demandeur</th>
                                    <th>département</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <?php
                            foreach($resultat as $res):
                            ?>
                            <tbody>
                                <tr>
                                    <td><?=$res['dem_nom']?></td>
                                    <td><?=$res['dem_dep']?></td>
                                    <td><?=$res['dem_email']?></td>
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
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>
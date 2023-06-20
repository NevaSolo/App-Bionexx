<?php
require_once("../Model/Connexion.php");
$base = Connection::getConnection();
$requete = "SELECT * FROM chefdepart;";
$etat = $base->prepare($requete);
$etat->execute();
$resultat = $etat->fetchAll();


$requete1 = "SELECT * FROM demandeur;";
$etat1 = $base->prepare($requete1);
$etat1->execute();
$resultat1 = $etat1->fetchAll();


$requete2 = "SELECT * FROM directeur;";
$etat2 = $base->prepare($requete2);
$etat2->execute();
$resultat2= $etat2->fetchAll();
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
        <div class="container"><a class="navbar-brand" href="#page-top">BIONEXx</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="../Vue/Administrateur/Message/Boite.php">Boite de reception</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="../Vue/Administrateur/Requete/NomFournisseur.php">Fournisseur</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="../Vue/Administrateur/Message/ListeDemandeur.php">LIste Demandeur</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="contact">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Liste des chef de departement</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col">
                <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Departement</th>
                    <th>Email</th>
                </tr>
            </thead>
            <?php
            foreach($resultat as $res):
            ?>
            <form action="../Controlleur/MessageControlleur.php" method="post">
            <tbody>
                <tr>
                    <td><input type="text" name="nom" style="border-width: 0px;"value="<?=$res['chef_nom']?>"></td>
                    <td><?=$res['chef_dep']?><span style="display: none;"><input type="text"name="name"value="Departement Achat"><input type="text"name="email"value="m.achatetstock@bionexx.com"><input type="text" name="message" style="border-width: 0px;"Value="Les articles des demandes de votre Departement est maintenant recuperable"></span></td>
                    <td><input type="text" name="destinataire" style="border-width: 0px;"value="<?=$res['chef_email']?>"><span style="display: none;"><input type="text" name="subject" style="border-width: 0px;"value="Departement Achat"></span><button class="btn btn-primary" type="submit">Send</button></td>
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
    </section>
    <section id="contact-1">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Liste des chef de demandeur</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col">
                <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Departement</th>
                    <th>Email</th>
                </tr>
            </thead>
            <?php
            foreach($resultat1 as $res1):
            ?>
            <form action="../Controlleur/MessageControlleur.php" method="post">
            <tbody>
                <tr>
                    <td><input type="text" name="nom" style="border-width: 0px;"value="<?=$res1['dem_nom']?>"></td>
                    <td><?=$res1['dem_dep']?><span style="display: none;"><input type="text"name="name"value="Departement Achat"><input type="text"name="email"value="m.achatetstock@bionexx.com"><input type="text" name="message" style="border-width: 0px;"Value="Les articles des demandes de votre Departement est maintenant recuperable"></span></td>
                    <td><input type="text" name="destinataire" style="border-width: 0px;"value="<?=$res1['dem_email']?>"><span style="display: none;"><input type="text" name="subject" style="border-width: 0px;"value="Departement Achat"></span><button class="btn btn-primary" type="submit">Send</button></td>
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
    </section>
    <section id="contact-2">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Direction</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col">
                <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                </tr>
            </thead>
            <?php
            foreach($resultat2 as $res2):
            ?>
            <form action="../Controlleur/MessageControlleur.php" method="post">
            <tbody>
                <tr>
                    <td><input type="text" name="nom" style="border-width: 0px;"value="<?=$res2['dir_nom']?>"></td>
                    <span style="display: none;"><input type="text"name="name"value="Departement Achat"><input type="text"name="email"value="m.achatetstock@bionexx.com"><input type="text" name="message" style="border-width: 0px;"Value="Les articles des demandes de votre Departement est maintenant recuperable"></span>
                    <td><input type="text" name="destinataire" style="border-width: 0px;"value="<?=$res2['dir_email']?>"><span style="display: none;"><input type="text" name="subject" style="border-width: 0px;"value="Departement Achat"></span><button class="btn btn-primary" type="submit">Send</button></td>
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
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>
<?php
session_start();
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
    <form action="../../../Controlleur/DemandeControlleur.php" method="post">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">Bionexx</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">progression</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="Boite.php">Boite de reception</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-center text-white bg-primary masthead">
        <div class="container"><img class="img-fluid d-block mx-auto mb-5" src="assets/img/profile.png">
            <h1>Demande D'article</h1>
            <hr class="star-light">
            <h2 class="font-weight-light mb-0">Merci de L'utiliser</h2>
        </div>
    </header>
    <section id="contact">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Formulaire de demande</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate">
                        <div class="control-group">
                            <div class="mb-0 form-floating controls pb-2"><label class="form-label">Date de ffdfdfdffdf</label><small class="form-text text-danger help-block"></small></div>
                            <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="date" id="name-1" required="" placeholder="Name" name="dm_dateDemande"><label class="form-label">Date de la demande</label><small class="form-text text-danger help-block"></small></div>
                            <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="text" id="name-2" required="" placeholder="Name" name="dm_nom"><label class="form-label">Nom du demandeur</label><small class="form-text text-danger help-block"></small></div>
                            <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="text" id="name-3" required="" placeholder="Name" name="dm_departement"><label class="form-label">Département</label><small class="form-text text-danger help-block"></small></div>
                        </div>
                        <div class="control-group">
                            <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="text" id="email" required="" placeholder="Email Address" name="dm_typeArticle"><label class="form-label">Type d'article</label><small class="form-text text-danger help-block"></small></div>
                        </div>
                        <div class="control-group">
                            <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="text" id="phone-1" required="" placeholder="Phone Number" name="dm_prioriter"><label class="form-label">Priorité</label><small class="form-text text-danger help-block"></small></div>
                            <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="date" id="phone-2" required="" placeholder="Phone Number"  name="dm_dateLiv"><label class="form-label">Date de livraison demande</label><small class="form-text text-danger help-block"></small></div>
                        </div>
                        <div class="control-group">
                            <div class="mb-5 form-floating controls pb-2"><small class="form-text text-danger help-block"></small></div>
                        </div>
                        <div id="success"></div>
                        <div><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Suivant</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </form>
    <div class="d-lg-none scroll-to-top position-fixed rounded"><a class="text-center d-block rounded text-white" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>
<?php
require_once("../../../Model/Demande.php");
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
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="../../../Mail/Message.php">RECLAMATION</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="Demande.php">DEMANDE</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">PROGRESSION</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="contact">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">BOITE DE RECEPTION</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate" action="" method="post">
                        <div class="control-group">
                            <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="text" id="email" required="" placeholder="Verifiez votre nom pour voir Vos demande"name="dm_nom"><label class="form-label">Saisir votre nom pour Voir les demandes</label></div>
                        </div>
                        <div><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Voir</button></div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-uppercase text-center text-secondary mb-0" style="font-size: 20px;">Vos demande</h2>
                    <div>
                    <?php
    if(isset($_POST['dm_nom'])){
      extract($_POST);
      $dm = new Demande();
      $dm -> setDmNom($dm_nom);
      $dm -> afficher();
    }
    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>
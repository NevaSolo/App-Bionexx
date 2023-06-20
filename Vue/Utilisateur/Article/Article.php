<?php
require_once("../../../Model/Connexion.php");
        $base = Connection::getConnection();
        $requete = "SELECT * FROM article;";
        $etat = $base->prepare($requete);
        $etat->execute();
        $resultat = $etat->fetchAll();

        $base1 = Connection::getConnection();
        $requete1 = "SELECT * FROM demande;";
        $etat1 = $base1->prepare($requete1);
        $etat1 -> execute();
        $resultat1 = $etat1-> fetchAll();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="../Message/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="../Message/assets/fonts/font-awesome.min.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav" style="height: 75px;">
        <div class="container"><a class="navbar-brand" href="#page-top">BIONEXX</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">RECLAMATION</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">PROGRESSION</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <section id="contact">
                    <div class="container">
                        <h2 class="text-uppercase text-center text-secondary mb-0">Formulaire d'article</h2>
                        <hr class="star-dark mb-5">
                        <?php
                        foreach($resultat1 as $res){}
                        ?>
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <form id="contactForm" name="sentMessage" novalidate="novalidate" action="../../../Controlleur/ArticleControlleur.php" method="post">
                                    <div class="control-group">
                                        <span style="display:none;"><div class="mb-0 form-floating controls pb-2"><input class="form-control" type="text" id="name" required="" placeholder="Name" name="ar_dateLiv"value="<?=$res['dm_dateLiv']?>"><label class="form-label">Name</label><small class="form-text text-danger help-block"></small></div>
                                        <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="text" id="name-3" required="" placeholder="Name" name="ar_date"value="<?=$res['dm_dateDemande']?>"><label class="form-label">Name</label><small class="form-text text-danger help-block"></small></div>
                                        <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="text" id="name-2" required="" placeholder="Name" name="ar_nomdem"value="<?=$res['dm_nom']?>"><label class="form-label">Name</label><small class="form-text text-danger help-block"></small></div>
                                        <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="text" id="name-1" required="" placeholder="Name" name="ar_num"value="<?=$res['dm_id']?>"><label class="form-label">Name</label><small class="form-text text-danger help-block"></small></div></span>
                                    </div>
                                    <div class="control-group">
                                        <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="email" id="email" required="" placeholder="Email Address" name="ar_article"><label class="form-label">Votre Article&nbsp;</label><small class="form-text text-danger help-block"></small></div>
                                    </div>
                                    <div class="control-group">
                                        <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="tel" id="phone" required="" placeholder="Phone Number" name="ar_qte"><label class="form-label">Quantité</label><small class="form-text text-danger help-block"></small></div>
                                    </div>
                                    <div id="success"></div>
                                    <div><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Ajouter une autre</button>
                                        <hr><button class="btn btn-primary btn-xl" id="sendMessageButton-1" type="submit"name="terminer">Terminer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section id="contact-1">
                    <div class="container">
                        <h2 class="text-uppercase text-center text-secondary mb-0">Les Article Ajouter</h2>
                        <hr class="star-dark mb-5">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <form id="contactForm-1" name="sentMessage" novalidate="novalidate">
                                    <?php
                                    foreach($resultat as $resultat){}
                                    ?>
                                    <div>
                                    <table>
                        <tr>
                            <td><?= $resultat['ar_article']?></td>
                            <td><?= $resultat['ar_qte']?></td>
                        </tr>
                    </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="../Message/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../Message/assets/js/freelancer.js"></script>
</body>

</html>
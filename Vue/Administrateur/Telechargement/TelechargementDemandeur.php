<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Telechargement</title>
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="assets2/css/styles.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <picture><img class="img-fluid" src="assets2/img/pdf-file.gif"></picture>
                </div>
                <div>
                    <p class="lead text-center">Télécharger la version PDF</p>
                </div>
                <form action="../../../Controlleur/TelechargementDem.php" method="post">
                <div class="text-end"><button class="btn btn-primary" type="submit" style="border-radius: 22px;"name="dempdf">Télécharger</button></form></div>
                <hr>
            </div>
            <div class="col-md-6">
                <div>
                    <picture><img class="img-fluid" src="assets2/img/xls-file.gif"></picture>
                </div>
                <div>
                    <p class="lead text-center">Télécharger la version Feuille de Calcule</p>
                </div>
                <div class="text-end"><a href="../../../Excel/Demandeur.php" class="btn btn-primary" role="button" style="border-radius: 19px;">Télécharger</a></div></form><hr></div>
                <hr>
            </div>
        </div>
    </div>
    <script src="assets2/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
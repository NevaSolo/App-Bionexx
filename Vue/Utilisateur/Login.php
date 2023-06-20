<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="filter: blur(0px);">
    <section class="login-clean" style="filter: blur(0px);">
        <form method="post" action="../../Controlleur/Authentification/AutUtilisateur.php"style="border-width: 0px;border-radius: 60px;">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration"><img class="img-fluid" src="assets/img/Bionexx_006.jpg"></div>
            <div class="mb-3"><input class="form-control" type="text" data-bss-hover-animate="pulse" placeholder="Votre nom" style="border-radius: 40px;"name="dem_nom"></div>
            <div class="mb-3"><input class="form-control" type="text" data-bss-hover-animate="pulse" placeholder="Confirmer votre nom" style="border-radius: 40px;"name="dm_nom"></div>
            <div class="mb-3"><input class="form-control" type="password" data-bss-hover-animate="pulse" placeholder="Password" style="border-radius: 40px;"name="dem_mdp"></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" data-bss-hover-animate="pulse" type="submit" style="background: rgb(71,244,140);border-radius: 40px;">Enregistrer</button></div><a class="forgot" href="#">mot de passe oublier?</a>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>
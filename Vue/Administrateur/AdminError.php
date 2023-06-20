<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LoginAdminError</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="filter: blur(0px);">
    <section class="login-clean" style="filter: blur(0px);">
        <form method="post" action="../../Controlleur/Authentification/AutAdmin.php" style="border-width: 0px;border-radius: 60px;">
            <h2 class="visually-hidden">Login Form</h2><a class="forgot" href="#"><img class="img-fluid" src="assets/img/husband.gif" style="width: 30px;height: 30px;">Administrateur</a>
            <div class="illustration"><img class="img-fluid" src="assets/img/Bionexx_006.jpg"></div><a class="forgot" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bookmark-x">
                    <path fill-rule="evenodd" d="M6.146 5.146a.5.5 0 0 1 .708 0L8 6.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 7l1.147 1.146a.5.5 0 0 1-.708.708L8 7.707 6.854 8.854a.5.5 0 1 1-.708-.708L7.293 7 6.146 5.854a.5.5 0 0 1 0-.708z"></path>
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
                </svg>Les données sont incorrecte</a>
            <div class="mb-3"><input class="form-control" type="text" data-bss-hover-animate="pulse" placeholder="Votre nom" style="border-radius: 40px;"name="ad_nom"></div>
            <div class="mb-3"></div>
            <div class="mb-3"><input class="form-control" type="password" data-bss-hover-animate="pulse" placeholder="Password" style="border-radius: 40px;"name="ad_mdp"></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" data-bss-hover-animate="pulse" type="submit" style="background: rgb(71,244,140);border-radius: 40px;">Enregistrer</button></div><a class="forgot" href="#">mot de passe oublier?</a>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>
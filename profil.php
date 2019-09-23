<?php
require 'connexion.php';
require 'functions/functions.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Good Vibes Streaming</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/chosen.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/simple-sidebar.css">
</head>
<body id="" class="wow fadeIn">

<?php require_once 'header.php'; ?>

<main id="">
    <div class="card text-center mt-4" style="width: 20rem; margin: 40%; margin-bottom: 2%">
        <img src="assets/images/author.png" alt="Photo de profil" class="rounded-circle" id="profileDisplay">
        <div class="card-body">
            <h3 class="card-title">Pseudo: <span class="font-weight-bold text-success"><?= $_SESSION['pseudo'] ?></span></h3>
            <p class="card-text">Date de Naissance: <span class="font-weight-bold text-success"><?= $_SESSION['datenais'] ?></span></p>
            <p class="card-text">Sexe: <span class="font-weight-bold text-success"><?= $_SESSION['sexe'] ?></span></p>
            <p class="card-text">Ville: <span class="font-weight-bold text-success"><?= $_SESSION['ville'] ?></span></p>
            <p class="card-text">Mot de passe: <span class="font-weight-bold text-success"><?= '<input type="password" readonly class="form-control-plaintext" id="pwd" value="'. $_SESSION['password'] .'">' ?></span></p>
            <a href="#" class="btn btn-primary" id="btn_modifier">Mettre à jour mon profil</a>
        </div>
    </div>

    <div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-warning" id="modal-title">Inscription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="w-100 text-center">
                        <span><img src="assets/images/author.png" alt=""></span>
                    </div>
                    <form id="form_user" method="post" action="script_php/script_signin.php">
                        <div class="form-row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="pseudo" class="text-left">Pseudo :</label>
                                    <input type="text" class="form-control" id="recipient-pseudo" name="pseudo" maxlength="50" minlength="2" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="datenais">Date de naissance:</label>
                                    <input type="date" class="form-control" id="recipient-datenais" name="datenais" maxlength="10" minlength="10" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="ville" class="col-form-label">Ville : </label>
                                    <input type="text" class="form-control" id="recipient-ville" name="ville" minlength="2" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="password" class="col-form-label">Mot de passe : </label>
                                    <input type="password" class="form-control" id="recipient-password" name="password"  minlength="8" required>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="action" name="action" value="ajout">
                        <input type="hidden" id="id_user" name="id_user">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                            <input type="submit" class="btn btn-primary" id="btn_signin" value="Enregistrer">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div
</main>

<?php require_once 'footer.php'; ?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/sweetalert2.all.min.js"></script>
<script src="assets/js/chosen.jquery.min.js"></script>
<script type="application/javascript">
    $(document).ready(function() {
        //Initliaser les animations avec la bibliothèque animate.min.css
        new WOW().init();

        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

    });
</script>
</body>
</html>

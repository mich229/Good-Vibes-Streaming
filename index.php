<?php
require 'connexion.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Good Vibes Streaming</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body id="" class="wow fadeIn">

<?php require_once 'header.php'; ?>

<main id="" class="container p-0" style="margin-top: 7.5%">

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
                                        <input type="text" class="form-control" id="pseudo" name="pseudo" maxlength="50" minlength="2" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="datenais">Date de naissance:</label>
                                        <input type="date" class="form-control" id="datenais" name="datenais" maxlength="10" minlength="10" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="sexe" class="col-form-label">Sexe : </label>
                                        <input type="text" class="form-control" id="sexe" name="sexe" maxlength="1" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="ville" class="col-form-label">Ville : </label>
                                        <input type="text" class="form-control" id="ville" name="ville" minlength="2" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="password" class="col-form-label">Mot de passe : </label>
                                        <input type="password" class="form-control" id="password" name="password"  minlength="8" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="conf-password" class="col-form-label">Confirmer mot de passe : </label>
                                        <input type="password" class="form-control" id="conf-password" name="conf-password"  minlength="8" required>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" id="action" name="action" value="ajout">


                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                <input type="submit" class="btn btn-primary" id="btn_signin" value="Enregistrer">
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-warning" id="modal-title">Connection</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="w-100 text-center">
                        <span><img src="assets/images/author.png" alt=""></span>
                    </div>
                    <form id="form_users" method="post" action="script_php/script_login.php">
                        <div class="form-row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="login-pseudo" class="text-left">Pseudo :</label>
                                    <input type="text" class="form-control" id="login-pseudo" name="login-pseudo" maxlength="50" minlength="2" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="login-password" class="col-form-label">Mot de passe : </label>
                                    <input type="password" class="form-control" id="login-password" name="login-password"  minlength="8" required>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="connexion" name="action" value="connexion">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                            <input type="submit" class="btn btn-primary" id="btn_signup" value="Se connecter">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

</main>

<?php require_once 'footer.php'; ?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/gulpfile.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/sweetalert2.all.min.js"></script>
<script type="application/javascript">
    $(document).ready(function() {
        //Initliaser les animations avec la bibliothèque animate.min.css
        new WOW().init();

        //on active le lien de la page
        $('#link_dashboard').addClass('link-active');

        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        //Appel à la fenêtre enrégistrement d'un utilisateur
        $("#btn_form_signin").click (function () {
            //On réinitialise le formulaire*
            $('#form_user')[0].reset();
            $('#action').val('ajout');
            $('#btn_signin').val("Enregistrer");
            $("#signinModal").modal('show');
        });

        //gérer nous-même la soumission du formulaire
        $('#form_user').submit(function() {
            event.preventDefault();

            swal({
                title: '',
                text: 'Veuillez patienter ...',
                imageUrl: 'assets/images/loader.gif',
                animation: true,
                width: 300,
                allowOutsideClick: false,
                showCancelButton: false,
                showConfirmButton: false,
                allowEscapeKey: false,
                allowEnterKey: false
            });

            var form_data = $(this).serialize();

            $.ajax({
                url:"script_php/script_signin.php",
                method:"POST",
                data:form_data,
                dataType:"json",
                success:function(data) {
                    console.log(data);

                    if(data.type === "success") {
                        swal({
                            type: data.type,
                            text: data.message,
                            width: 300,
                            buttonsStyling: false,
                            confirmButtonClass: "btn btn-primary"
                        }).then(function() {
                            window
                                .location
                                .href = 'index.php';
                        });
                    }
                    else {
                        swal({
                            type: data.type,
                            text: data.message,
                            width: 300,
                            buttonsStyling: false,
                            confirmButtonClass: "btn btn-primary"
                        });
                    }

                },
                error:function(data) {
                    console.log(data)
                }
            });
        });

        $("#btn_form_signup").click (function () {
            //On réinitialise le formulaire*
            $('#form_users')[0].reset();
            $('#action').val('connexion');
            $('#btn_signup').val("Se connecter");
            $("#signupModal").modal('show');
        });

        $('#form_login').submit(function() {
            event.preventDefault();

            //Faire patienter l'utilisateur
            swal({
                title: '',
                text: 'Veuillez patienter ...',
                imageUrl: 'assets/images/loader.gif',
                animation: true,
                width: 300,
                allowOutsideClick: false,
                showCancelButton: false,
                showConfirmButton: false,
                allowEscapeKey: false,
                allowEnterKey: false
            });

            //Sérialiser le formulaire
            var form_data = $(this).serialize();

            //Effectuer un appel ajax sur la page de traitement des données
            $.ajax({
                url:'script_php/script_login.php',
                method:'post',
                data:form_data,
                dataType:'json',
                success:function(data) {

                    console.log(data);

                    if(data.etat_connexion === "Connexion OK") {
                        swal.close();

                        window.location.href = data.index;
                    }
                    else {
                        swal.close();
                        swal({
                            type: 'error',
                            title: "Oups !",
                            text: data.etat_connexion,
                            width: 300,
                            buttonsStyling: false,
                            confirmButtonClass: "btn btn-primary"
                        });
                    }
                },
                error: function(data) {
                    swal({
                        type: 'error',
                        title: "Oups !",
                        text: "Une erreur est survenue, veuillez réessayer plus tard!",
                        width: 300,
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-primary"
                    });

                    console.log(data);
                }
            });


        });
    });
</script>
</body>
</html>
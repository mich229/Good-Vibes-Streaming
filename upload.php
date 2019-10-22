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

<?php require_once 'header1.php'; ?>

<main id="">
    <fieldset class="pl-4">
        <form action="" method="post" enctype="multipart/form-data" id="form_upload">
            <legend class="text-secondary text-info">Charger une nouvelle video</legend>
            <div class="form-row">
                <div class="col-4 mr-3">
                    <div class="form-group">
                        <label for="import_file">Choisir la video</label>
                        <input type="file" name="import_file" class="" id="upload_file" lang="fr">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="import_poster">Choisir une image Poster</label>
                        <input type="file" name="import_poster" class="" id="upload_poster" lang="fr">
                    </div>
                </div>
                <div class="col-3 ml-3">
                    <div class="form-group">
                        <label for="categorie">Catégorie :</label>
                        <select name="categorie" id="Liste_categorie" class="custom-select chosen">
                            <option disabled>Choisissez une catégorie</option>
                            <?= list_categorie($connect); ?>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="tags">
                            Tags :
                        </label>
                        <textarea name="tags" id="" cols="50" class="form-control mt-1" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="titre">
                            Titre :
                        </label>
                        <input type="text" class="form-control mt-1" name="titre" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75% télécharger... Veuillez patienter</div>
                        </div>
                    </div>
                </div>

            </div>

            <div>
                <input type="reset" class="btn btn-danger" value="Annuler">
                <input type="submit" class="btn btn-success fa-upload" value="Upload">
            </div>

        </form>
    </fieldset>
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

        //Initialiser chosen
        $("#liste_categorie").chosen({
            no_results_text : ' ',
            width : "40%"
        });

        //Soumission du formulaire Upload de la video
        $('#form_upload').submit(function() {
            event.preventDefault();
            var form_data = $('#form_upload').serialize();

            $.ajax({
                url:"script_php/uploaded.php",
                method:"POST",
                data:form_data,
                dataType:"json",
                beforeSend:function(data) {
                    swal({
                        title: '',
                        text: 'Veuillez patienter.',
                        imageUrl: 'assets/images/loader.gif',
                        animation: true,
                        width: 300,
                        allowOutsideClick: false,
                        showCancelButton: false,
                        showConfirmButton: false,
                        allowEscapeKey: false,
                        allowEnterKey: false
                    })
                },
                success:function(data) {
                    console.log(data);
                    swal.close();
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
                    console.log(data);
                    swal({
                        type: 'error',
                        text: 'Une erreur est survenue lors de l\'opération ! Veuillez réessayer',
                        width: 300,
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-primary"
                    });
                }
            });
        });
    });
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading align-items-center"><img src="assets/images/logo.jpg" class="" width="70px" alt="Logo"></div>
        <div class="list-group list-group-flush">
            <a href="index.php" class="list-group-item list-group-item-action bg-light fa fa-home"> Accueil</a>
            <a href="#" class="list-group-item list-group-item-action bg-light fa fa-folder-open"> Categorie</a>
            <a href="#" class="list-group-item list-group-item-action bg-light fa fa-folder"> Top</a>
            <?php if(isset($_SESSION['id_user']) AND !empty($_SESSION['id_user'])) {
                echo '<a href="profil.php" class="list-group-item list-group-item-action bg-light fa fa-user"> Profil</a>';
                echo '<a href="upload.php" class="list-group-item list-group-item-action bg-light fa fa-upload"> Upload</a>';
            }
            ?>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom pt-3">
            <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-bars fa-2x " ></i></button>

            <div class="" id="navbarSupportedContent">
                <div class="ml-auto mt-2 mt-lg-0 float-right pl-3">
                    <form class="form-inline active-pink-4">
                        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                               aria-label="Search">
                        <a href="#"><i class="fas fa-search" aria-hidden="true"></i></a>
                    </form>

                </div>
            </div>

            <?php
            if(isset($_SESSION['id_user']) AND !empty($_SESSION['id_user']))
            {
                echo '<span class="navbar-text text-sm-center text-md-center" style="margin-left: 35%">

                        <div class="dropdown text-sm-center text-md-center">
                          <a class="btn btn-success dropdown-toggle text-white text-sm-center text-md-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i> Bienvenue '.$_SESSION['pseudo'].'
                          </a>

                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="http://localhost/good-vibes-streaming.com/deconnexion.php">Se déconnecter</a>
                          </div>
                        </div>
                    </span>';
            }
            else {
                echo '<label for="" class="invisible w-25">azerty</label>
                            <button type="button" class="btn btn-rounded btn-primary" id="btn_form_signin"><i class="fa fa-sign-in-alt pr-2" aria-hidden="true"></i>Inscription</button>
                            <label for="" class="invisible w-25">azerty</label>
                            <button type="button" class="btn btn-rounded btn-success"  id="btn_form_signup"><i class="fa fa-sign-out-alt pr-2" aria-hidden="true"></i>Connexion</button>';
            }
            ?>

        </nav>


    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->
</body>
</html>
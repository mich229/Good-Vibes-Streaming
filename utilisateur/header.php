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

	      <?php
	        if(isset($_SESSION['id_user']) AND !empty($_SESSION['id_user']))
					echo '
						<a href="profil.php" class="list-group-item list-group-item-action bg-light fa fa-user"> Profil</a>
                        <a href="upload.php" class="list-group-item list-group-item-action bg-light fa fa-upload"> Upload</a>	
					';
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

	            <?php
	              if(!isset($_SESSION['id_user']) AND !empty($_SESSION['id_user']))
	              echo '
	                <label for="" class="invisible w-25">azerty</label>
					        <button type="button" class="btn btn-rounded btn-primary" id="btn_form_signin"><i class="fa fa-sign-in-alt pr-2" aria-hidden="true"></i>Inscription</button>
					        <label for="" class="invisible w-25">azerty</label>
					        <button type="button" class="btn btn-rounded btn-info"  id="btn_form_signup"><i class="fa fa-sign-out-alt pr-2" aria-hidden="true"></i>Connexion</button>
	              '
	            ?>
          </div>
        </div>

	      <?php
	      if(isset($_SESSION['id_user']) AND !empty($_SESSION['id_user']))
	        echo '
	          <span class="navbar-text text-sm-center text-md-center" style="margin-left: 35%">

            <div class="dropdown text-sm-center text-md-center">
              <a class="btn btn-success dropdown-toggle text-white text-sm-center text-md-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i> Bienvenue '. $_SESSION['pseudo'] .'
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="http://localhost/good-vibes-streaming.com/deconnexion.php">Se déconnecter</a>
              </div>
            </div>
          </span>
	        ';
	      ?>

      </nav>

      <div class="container-fluid">
          <section class="mt-2">
              <h3 class="text-secondary text-info">Les 10 dernières vidéos postées</h3>
              <div class="row">
                  <div class="col-lg-3 col-md-4 ml-3 pt-0 pb-2">
                      <video src="assets/video/Installation et configuration.MP4" width=320  height=240 controls poster="" muted="muted" autoplay="false">
                          <source src="assets/video/Installation%20et%20configuration.MP4" type="video/mp4">
                      </video>
                  </div>
              </div>
          </section>
          <section>
              <h3 class="text-secondary text-info">Les 10 vidéos les plus vues</h3>
              <div class="row">
                  <div class="col-lg-3 col-md-4 ml-3 pt-0 pb-2 ">
                      <video src="assets/video/Thèmes,%20menus%20et%20widgets.MP4" width=320  height=240 controls poster="" muted="muted" autoplay="false">
                          <source src="assets/video/Thèmes,%20menus%20et%20widgets.MP4" type="video/mp4">
                      </video>
                  </div>
              </div>
          </section>
          <section>
              <h3 class="text-secondary text-info">Les 5 dernières vidéos de chaque catégorie</h3>
              <div class="row">
                  <div class="col-lg-3 col-md-4 ml-3 pt-0 pb-2">
                      <video src="assets/video/Articles%20et%20pages.MP4" width=320  height=240 controls poster="" muted="muted" autoplay="false">
                          <source src="assets/video/Articles%20et%20pages.MP4" type="video/mp4">
                      </video>
                  </div>
              </div>
          </section>
        <h1 class="mt-4">Tendances</h1>
        <div class="row">

        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="assets/images/images (3).jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/images (2).jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/images (1).jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div></div>
      </div>
    </div>
  </div>
</body>

</html>

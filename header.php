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
      <div class="sidebar-heading align-items-center"><img src="assets/images/logo.jpg" width="70px" alt="Logo"></div>
      <div class="list-group list-group-flush">
        <a href="index.php" class="list-group-item list-group-item-action bg-light fa fa-home"> Accueil</a>
        <a href="#" class="list-group-item list-group-item-action bg-light fa fa-folder-open"> Categorie</a>
        <a href="#" class="list-group-item list-group-item-action bg-light fa fa-folder"> Top</a>
        <a href="profil.php" class="list-group-item list-group-item-action bg-light fa fa-user"> Mon profil</a>
        <a href="upload.php" class="list-group-item list-group-item-action bg-light fa fa-upload"> Upload</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-bars fa-2x " ></i></button>

        <div class="float-right pl-3" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <form class="form-inline active-pink-4">
                  <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                         aria-label="Search">
                  <i class="fas fa-search" aria-hidden="true"></i>
              </form>

              <button type="button" class="btn btn-labeled btn-success" id="btn_form_signin">
                  <span class="btn-label"><i class="fa fa-sign-in-alt"></i></span> S'inscrire</button>

              <button type="button" class="btn btn-labeled btn-primary" id="btn_form_signup">
                  <span class="btn-label"><i class="fa fa-sign-out-alt"></i></span> Se connecter</button>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Tendances</h1>
        <div class="row">
            <div class="col-lg-3 col-md-4 ml-3">
                <video src="assets/video/Installation et configuration.MP4" width=320  height=240 controls poster="" autoplay="none">
                    <source src="assets/video/Installation%20et%20configuration.MP4" type="video/mp4">
                </video>
            </div>
            <div class="col-lg-3 col-md-4 ml-3 border-danger">
                <video src="assets/video/Thèmes,%20menus%20et%20widgets.MP4" width=320  height=240 controls poster="" autoplay="none">
                    <source src="assets/video/Thèmes,%20menus%20et%20widgets.MP4" type="video/mp4">
                </video>
            </div>
            <div class="col-lg-3 col-md-4 ">
                <video src="assets/video/Articles%20et%20pages.MP4" width=320  height=240 controls poster="" autoplay="none">
                    <source src="assets/video/Articles%20et%20pages.MP4" type="video/mp4">
                </video>
            </div>
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
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

</body>

</html>

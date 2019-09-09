<header>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading"><img src="" alt="Logo"></div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-light fa fa-home"> Accueil</a>
                <a href="#" class="list-group-item list-group-item-action bg-light fa fa-folder-open"> Categorie</a>
                <a href="#" class="list-group-item list-group-item-action bg-light fa fa-folder"> Top</a>
                <a href="#" class="list-group-item list-group-item-action bg-light fa fa-user"> Mon profil</a>
                <a href="#" class="list-group-item list-group-item-action bg-light fa fa-upload"> Upload</a>
                <a href="#" class="list-group-item list-group-item-action bg-light fa fa-sign-in-alt"> Inscription</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">


                <div class="pt-2" id="navbarSupportedContent">
                    <ul class="form-inline ml-auto">
                        <form class="input-group md-form form-sm form-inline mr-5 float-left">
                            <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
                            </div>
                        </form>

                        <button type="button" class="btn btn-success mr-3" id="btn_form_signin">S'inscrire</button>
                        <button type="button" class="btn btn-primary mr-5" id="btn_form_signup">Se connecter</button>
                    </ul>
                </div>

                <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-bars fa-2x " ></i></button>
            </nav>

            <div class="container-fluid"  style="margin-top: 1%">
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
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
</header>
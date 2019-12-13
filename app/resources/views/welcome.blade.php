<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Smart Mind</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Styles -->
    <style>
    .row {
        background-color: #ddd;
        color: #333;
        height: 500px;
        margin-top: 50px;
        padding: 25px 50px 25px 50px;
    }

    .row h1 {
        text-align: center;
    }

    .cercle {
        background: #e5a52a;
        border-radius: 50%;
        width: 190px;
        height: 160px;
        padding: 25px;
        text-align: center;
        margin-top: 10px;
        margin-left: 25px;
        margin-right: 25px;
    }

    footer .row {
        background: black;
    }
    /*card*/
    body {
  background-color: #333;
  font-family: 'Open Sans', sans-serif;
}

.cards {
  background:#333;
  height: 500px;
  width: 1000px;
  top: 60px;
  margin-top:50px;
  left: calc(50% - 300px);
  display: flex;
}


.card {
  display: flex;
  height: 350px;
  width: 600px;
  background-color: #FFF;
  border-radius: 10px;
  box-shadow: -1rem 0 3rem #000;
/*   margin-left: -50px; */
  transition: 0.4s ease-out;
  position: relative;
  left: 0px;
}

.card:not(:first-child) {
    margin-left: -50px;
}

.card:hover {
  transform: translateY(-20px);
  transition: 0.4s ease-out;
}

.card:hover ~ .card {
  position: relative;
  left: 50px;
  transition: 0.4s ease-out;
}

.title {
  color: #7f67ab;
  font-weight: 50;
  left: 20px;
  top: 15px;
}
svg {
  fill: #17141d;
  stroke-width: 2px;
}
.a{
display: inline;
display: flex;
  justify-content: center;
}
/*button*/
.btn-jaune{
    background:#e5a52a;

}
.btn-orange{
     background:#f9593a;

}

    </style>
</head>

<body>
    <div id="app">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <a class="navbar-brand" href="#">SMC</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Formation
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Service
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">A propos de nous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact </a>
                        </li>
                    </ul>
                </div>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100"
                            src="https://www.dunegestion.com/upload4mail/commercialisation/alt_portail_39637_formation-web.jpg"
                            alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Smart Mind</h1>
                            <p>Centre de certification et de formation</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzdHNwA5SmHD_7BrziQ-v96wdFxp6747gFm5nGHZUkQYw_ddfC&s"
                            alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Smart Mind</h1>
                            <p>Centre de certification et de formation</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="http://www.manageo-data-agency.com/wp-content/uploads/2017/04/Fotolia_112185258_S2.jpg"
                            alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Smart Mind</h1>
                            <p>Centre de certification et de formation</p>
                        </div>
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
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h1>Le centre de formation SMC</h1>
                    <p> SMC est un centre de formation et de conseil spécialisé en développement informatique à
                        casablanca et rabat, nous proposons des formations de qualité destinées aux développeurs
                        informatique d’un niveau débutant, intermédiaire ou professionnel.<br>
                        Nous vous accompagnons dans des formations telles que Java/JEE , PHP7, Symfony, Android , et
                        pleines d’autres technologies qui répondent aux besoins du marché marocain et principalement
                        l’offshoring.<br>
                    </p>
                    <button type="button" name="button" class="btn btn-warning">Découvrez nos formations</button>
                </div>
                <div class="col-xs-12 col-md-6">
                    <img src="" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h1> Nos principales qualités</h1>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="cercle">Des formateurs experts.</div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="cercle">La pratique est au centre de nos méthodes pédagogiques.</div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="cercle">Des formations motivantes et concrètes.</div>
                </div>

            </div>
        </div>
        <!--cards_formation-->
        <div class="container cards" >
            <div class="card">
            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
                <h6 class="title">Formation Drupal</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="a">
                <span ><a href="#" class="btn btn-jaune" >Inscription</a></span>
                <span style="margin-left:10px;"><a href="#" class="btn btn-orange">Voir plus</a></span>
                </div>
                
            </div>
            <div class="card">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
                <h5 class="title">Formation Drupal</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="a">
                <span ><a href="#" class="btn btn-jaune" >Inscription</a></span>
                <span style="margin-left:10px;"><a href="#" class="btn btn-orange">Voir plus</a></span>
                </div>
            </div>
            <div class="card">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
                <h5 class="title">Formation Drupal</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="a">
                <span ><a href="#" class="btn btn-jaune" >Inscription</a></span>
                <span style="margin-left:10px;"><a href="#" class="btn btn-orange">Voir plus</a></span>
                </div>
            </div>
            <div class="card">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
                <h5 class="title">Formation Drupal</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <div class="a">
                <span ><a href="#" class="btn btn-jaune" >Inscription</a></span>
                <span style="margin-left:10px;"><a href="#" class="btn btn-orange">Voir plus</a></span>
                </div>
            </div>
        </div>



        <!-- FOOTER -->
        <div class="container">
            <footer class="fluid page-footer font-small stylish-color-dark pt-4 mt-5">
                <div class="fluid container_principal text-center text-md-left">
                    <div class="row">
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-2">
                            <h6 class="text-uppercase font-weight-normal">OMLINE <span class="c4">GLOBAL</span><span
                                    class="c6">WEB</span></h6>
                            <p><strong>Sites web lowcost</strong>, <strong>solutions de marketing online</strong>,
                                <strong>centrale de réservation</strong> et logiciel de gestion, portail
                                d'<strong>annonces de locations vacances en France</strong>.</p>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-2">
                            <h6 class="text-uppercase font-weight-normal">Liens utiles</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="http://www.omline-tourisme.com" target="_blank"
                                        title="Portail d'annonces de locations vacances en France">Omline Tourisme</a>
                                </li>
                                <li>
                                    <a href="https://www.resa-booking.com" target="_blank"
                                        title="Centrale de réservation et application de gestion de réservation online">Resabooking</a>
                                </li>
                            </ul>
                        </div>
                        <hr class="clearfix w-100 d-md-none">
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-2">
                            <h6 class="text-uppercase font-weight-normal">Plan du site</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/" target="_parent" title="Omline Globalweb bienvenue">Home</a>
                                </li>
                                <li>
                                    <a href="agence-creation-site-web-sur-mesure.php" target="_parent"
                                        title="Nos prestation web : Responsive Web Design et maintenance web">Webdesign</a>
                                </li>
                                <li>
                                    <a href="solutions-marketing-online.html" target="_parent"
                                        title="Stratégie de communication et solutions de Marketing Online">Web
                                        Marketing</a>
                                </li>
                                <li>
                                    <a href="portofolio-site-web-omline.php" target="_parent"
                                        title="portofolio de site web Responsive Design pour le secteur tourisme : Camping, Gîtes...; secteur bien-être : Yoga, Qi Gong, Taichi...">Portofolio</a>
                                </li>
                            </ul>
                        </div>
                        <hr class="clearfix w-100 d-md-none">

                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-2">
                            <h6 class="text-uppercase font-weight-normal">Contact</h6>
                            <p>
                                <a href="tel:+33980130633" title="Téléphone contact Omline">
                                    <i class="fa fa-envelope mr-3"></i>omline.website@gmail.com</a><br>
                                <a href="tel:0033980130633" title="Contact téléphone Omline"><i
                                        class="fa fa-phone mr-3"></i>(+33) 09 80 13 06 33</a><br>
                                <a href="tel:0034952448309" title="Contact téléphone Omline"><i
                                        class="fa fa-phone mr-3"></i>(+34) 952 44 83 09</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright text-center py-3">© 2018 Copyright:
                    <a href="http://www.omline-website.com" target="_parent"
                        title="Agence de COM, création de site internet, référencement, solutions de marketing online">
                        OMLINE GLOBALWEB</a><br>
                    <a href="rgpd/ml.php" class="fancybox fancybox.iframe">Mentions Légales</a> | <a href="rgpd/cc.php"
                        class="fancybox fancybox.iframe">Charte de confidentialité</a> |
                    <a href="rgpd/cookies.php" class="fancybox fancybox.iframe">Politique de cookies</a>
                </div>
            </footer> <!-- FIN FOOTER -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
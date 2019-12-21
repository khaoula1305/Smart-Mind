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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="app">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <a class="navbar-brand" href="home">SMC</a>
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
                            src="./img/carousel1.jpg"
                            alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Smart Mind</h1>
                            <p>Centre de certification et de formation</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="./img/carousel2.jpg"
                            alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Smart Mind</h1>
                            <p>Centre de certification et de formation</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="./img/im1.jpg"
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
                    <img height="300px"  style="margin-top:80px;"src="./img/im1.jpg" alt="">
                </div>
            </div>
            <div class="row slogan">
                    <img src="./img/slogan.png" alt="">
            </div>
            <div class="row principal" >
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
        <div class="container cardsFormation">
            <span class="h1">
                <h1>les formations récentes</h1>
            </span>
            <div class="cards container">
                <div class="card">
                    <img class="img-fluid" src="./img/multimedia.png" alt="Card image cap">
                    <h5 class="title">Formation Multimedia</h5>
                    <p class="card-text">La formation en Infographie et prépare les futurs graphistes à travailler dans
                        tous les domaines de la communication </p>
                    <div class="a">
                        <span><a href="#" class="btn btn-jaune">Inscription</a></span>
                        <span style="margin-left:10px;"><a href="#" class="btn btn-orange">Voir plus</a></span>
                    </div>

                </div>
                <div class="card">
                    <img class="img-fluid" src="./img/drupal.png"
                        alt="Card image cap">
                    <h5 class="title">Formation Drupal</h5>
                    <p class="card-text">DRUPAL ets CMS le plus populaire pour la creation d'un site web sécurisé</p>
                    <div class="a">
                        <span><a href="#" class="btn btn-jaune">Inscription</a></span>
                        <span style="margin-left:10px;"><a href="#" class="btn btn-orange">Voir plus</a></span>
                    </div>
                </div>
                <div class="card">
                    <img class="img-fluid" src="./img/java.jpg"
                        alt="Card image cap">
                    <h5 class="title">Formation JAVA/JEE</h5>
                    <p class="card-text">JAVA et JEE sont les technologies les plus répandues pour le dévloppement des
                        applications</p>
                    <div class="a">
                        <span><a href="#" class="btn btn-jaune">Inscription</a></span>
                        <span style="margin-left:10px;"><a href="#" class="btn btn-orange">Voir plus</a></span>
                    </div>
                </div>
                <div class="card">
                    <img class="img-fluid" src="./img/Python.jpg"
                        alt="Card image cap">
                    <h5 class="title">Formation PYTHON</h5>
                    <p class="card-text">Favorisons la programmation impérative, fonctinnelle et orienté objet</p>
                    <div class="a">
                        <span><a href="#" class="btn btn-jaune">Inscription</a></span>
                        <span style="margin-left:10px;"><a href="#" class="btn btn-orange">Voir plus</a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <div class="footer">
            <div class="row">
                <div class="col-md-4 col-lg-6 col-xl-3 mx-auto mb-2">
                    <h3 class="text-uppercase font-weight-normal">A propos de nos </h3>
                    <p>SMC est un centre de formation et de conseil spécialisé en développement informatique à
                        casablanca et rabat, nous proposons des formations de qualité destinées aux développeurs
                        informatique d’un niveau débutant, intermédiaire ou professionnel.</p>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-8 col-lg-6 col-xl-3 mx-auto mb-md-0 mb-2">
                    <h6 class="text-uppercase font-weight-normal">Contact</h6>
                    <p>
                        <a href="#" title="adesse mail">
                      smartMind.website@gmail.com</a><br>
                        <a href="#" title="Contact téléphone">Adresse : 44 Avenue des FAR, Casablanca 20006, Maroc</a><br>
                        
                    </p>
                </div>
               
            </div>
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
                <a href="http://www.omline-website.com" target="_parent"
                    title="Agence de COM, création de site internet, référencement, solutions de marketing online">
                   SMART MIND</a><br>
                <a href="rgpd/ml.php" class="fancybox fancybox.iframe">Mentions Légales</a> | <a href="rgpd/cc.php"
                    class="fancybox fancybox.iframe">Charte de confidentialité</a> |
                <a href="rgpd/cookies.php" class="fancybox fancybox.iframe">Politique de cookies</a>
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
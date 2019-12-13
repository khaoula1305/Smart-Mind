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
    </style>
</head>

<body>
    <div id="app">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">SMC</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
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
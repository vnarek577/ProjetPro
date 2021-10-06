<?php

require 'controllers/controller-index.php';



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap" rel="stylesheet">
    <title>MovieCheck</title>
</head>

<style>
    body {

        margin: 0;
        padding: 0;
        background-color: #1a1d29;
    }

    .navbar-brand {

        font-family: 'Kaisei Tokumin', serif;
        font-size: 2em;

    }

    .card-body {
        font-family: 'Kaisei Tokumin', serif;
        text-align: center;
    }

    .banner-image {

        background-image: url("assets/img/new.jpg");
        background-size: cover;
        width: 100vh;
    }


    .welcome h1 {
        font-family: 'Kaisei Tokumin', serif;
    }

    .welcome p {
        font-family: 'Mouse Memoirs', sans-serif;
        font-size: 6rem;
        font-weight: bold;
        color: white;
    }

    .ligne {
        position: absolute;
        width: 100%;
        height: 7px;
        background-color: #505050;
    }

    .responsive {
        height: 400px;
        background-color: black;
    }

    .image {

        display: flex;
        justify-content: center;
        align-items: center;
        height: 40vh;
    }

    .lastfilm {


        display: flex;
        justify-content: center;
        align-items: center;
        background: white;
        width: 40%;
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;

    }

    .lastfilm span {

        font-size: 2rem;
        font-family: 'Kaisei Tokumin', serif;

    }

    .navbar-brand {

        font-family: 'Mouse Memoirs', sans-serif;
        font-size: 2.5rem;
    }



    .some-content {

        display: flex;
        justify-content: space-evenly;
        background: black;
        align-items: center;
        height: 40vh;

    }

    .some-text {
        font-family: 'Kaisei Tokumin', serif;
    }

    .card a img {

        width: 270px;
    }


    @media screen and (max-width: 576px) {
        .image img {
            width: 100px;
        }

        .net {
            font-size: 20px !important;
        }

        .lastfilm span {
            font-size: 20px;
        }

        .lastfilm {
            width: 70%;
            align-items: center;
            margin-top: 8% !important;
        }

        .cards {
            margin-top: 2% !important;
        }

        .card {
            width: 10rem !important;
        }

        .card img {
            height: 200px !important;
            width: 100%;
        }

        .card-body {
            height: 30px !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }

        .card-body p {
            font-size: 10px !important;
        }

        .some-content {

            display: block;
            text-align: center;
        }

        .some-images img {

            width: 100px;
            margin-top: 5%;
        }

        .some-text h1 {

            font-size: 20px;
        }

        .some-text h4 {
            font-size: 15px;
        }
    }

    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    .middle a {
        text-decoration: none;
    }

    .text {
        background-color: #1a1d29;
        color: white;
        font-size: 16px;
        padding: 8px 16px;
        text-decoration: none
    }

    .card:hover .text {

        text-decoration: none
    }

    .card:hover img {
        opacity: 0.3;
    }

    .card:hover .middle {
        opacity: 1;
    }


    .dropbtn {
        background-color: #6c757d;
        color: white;
        padding: 16px;
        font-size: 15px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;

    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        background-color: #383838;
        min-width: 10px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        margin-left: 10%;
    }

    .dropdown-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #383838;
        text-decoration: underline;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #6c757d;
    }

    .box {
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0.8;
    }


    .box:hover {
        transition: all 1s ease-out;
    }



    .validation {
        display: flex;
        background-color: green;
        color: white;
        align-items: center;
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
        height: 30px;
        padding-right: 10px;

    }

    .box1 {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: green;
        height: 30px;
        width: 40px;
        text-align: center;
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    .decconect {
        border: none;
        padding: 0;
        margin: 0;
        font-size: 15px;
        color: white;
        background-color: transparent;
    }

    a:hover button {
        text-decoration: underline;
        transition: 0.3s;
        color: white;
    }

    .color a:hover {
        color: white;
    }

    .color a {

        color: #cccccc;
    }

    .color button {

        color: #cccccc;
    }


  

    li a {
        text-decoration: none;
        color: #f2f2f2;
        font-family: 'Kaisei Tokumin', serif;
        font-weight: lighter;
        font-size: 17px;
        padding: 0 10px;
        display: inline-block;
    }

    .cool-link::after {
        content: '';
        display: block;
        width: 0;
        height: 2px;
        background: white;
        transition: width .3s;
        background-color: white;


    }

    .cool-link:hover::after {
        width: 100%;
        transition: width .3s;


    }

    .cool-link:hover {
        color: white;
    }

    .compte {
        width: 30%;
        background-color: #C8C8C8;
    }
</style>

<body>


    <?php if (isset($_SESSION['user_pseudo'])) {  ?>

        <nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="personalColor">
        <div class="container-fluid container">
            <a class="navbar-brand" href="index.php">MegaCritic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link cool-link" href="./views/allmycritics.php">Liste de films</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button class="dropbtn bg-dark decconect"><?= $_SESSION['user_pseudo'] ?> <img width="50px" src=""></button>
                    <div class="dropdown-content color">
                        <a href="./views/user.php">Compte</a>
                        <form action="" method="POST" novalidate>
                            <a><button name="deconectButton" type="submit" class="decconect">Déconnexion</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>


        <div id="carouselExampleIndicators" class="w-100 vh-50 carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/frogSmall.jpg" class="d-block w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block welcome">
                        <p>Mega critic</p>
                        <h1>Un site destiné à partager mes avis sur les films les plus connus</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/leonSmall.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block welcome">
                        <p>Mega critic</p>
                        <h1>Un site destiné à partager mes avis sur les films les plus connus</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/spiderSmall.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block welcome">
                        <p>Mega critic</p>
                        <h1>Un site destiné à partager mes avis sur les films les plus connus</h1>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    <?php  } else { ?>

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3" id="personalColor">
            <div class="container">
                <a href="" class="navbar-brand">Mega Critic</a>
                <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a href="views/connect.php" class="nav-link text-white"><button class="btn btn-sm btn-secondary">Connexion</button></a>
                        </li>
                        <li class="nav-item">
                            <a href="views/form.php" class="nav-link text-white"><button class="btn btn-sm btn-secondary">Rejoignez-Nous</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="content text-center">
                <p class="welcome">Mega critic</p>
                <h1 class="text-white">Un site destiné à partager mes avis sur les films les plus connus</h1>
            </div>
        </div> -->
        <div id="carouselExampleIndicators" class="w-100 vh-50 carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/frogSmall.jpg" class="d-block w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block welcome">
                        <p>Mega critic</p>
                        <h1>Un site destiné à partager mes avis sur les films les plus connus</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/leonSmall.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block welcome">
                        <p>Mega critic</p>
                        <h1>Un site destiné à partager mes avis sur les films les plus connus</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/spiderSmall.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block welcome">
                        <p>Mega critic</p>
                        <h1>Un site destiné à partager mes avis sur les films les plus connus</h1>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    <?php  }  ?>



    <div class="lastfilm mt-5">
        <span>Les derniers films publiés </span>
    </div>
    <div class="container-fluid mt-4 cards">
        <div class="row">
            <?php foreach ($posterAllArray as $image) { ?>
                <div class="col-sm-4 d-flex justify-content-around mt-4">
                    <div class="card" style="width: 17rem;">
                        <img height="300px" src="<?= $image['critics_poster'] ?>" alt="Card image cap">
                        <div class="middle">
                            <a href="./views/individuelCritic.php?id=<?= $image['critics_id'] ?>">
                                <div class="text"><?= $image['critics_film_title'] ?></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><?= $image['critics_film_title'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


    <div class="mt-5 d-flex justify-content-center">
        <a href="./views/allmycritics.php"><button type="button" class="btn  btn-secondary">Voir plus</button></a>
    </div>


    <div class="some-content mb-5 mt-5">

        <div class="some-text">
            <h1 class="text-white">Où que vous soyez.</h1>
            <h4 class="text-white">Regardez et postez vos commentaire de vos <br />films préférés sur
                smartphone et ordinateur.</h4>
        </div>
        <div class="some-images">
            <img width="120px" src="./assets/img/iphone.png">
            <img width="250px" src="./assets/img/bilis.png">
        </div>

    </div>






    <!-- <div class="container-fluid mt-5 mb-5 responsive">
        <div class="row align-items-center net">
            <div class="col-lg-6 text-center">
                <h1 class="text-white">Où que vous soyez.</h1>
                <h2 class="text-white">Regardez et postez vos commentaire<br /> de vos films préférés sur
                    smartphone et ordinateur.</h2>
            </div>
            <div class="col-md-4 image">
                <img width="150px" src="./assets/img/phone.png">
                <img width="350px" src="./assets/img/tele.png">
            </div>
        </div>
    </div> -->








    <?php

    include './views/foot.php';

    ?>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        var personal = document.getElementById('personalColor');


        window.addEventListener('scroll', function() {

            if (window.pageYOffset > 100) {
                personal.setAttribute("style", "background-color: black");
            } else {
                personal.removeAttribute('style', 'background-color: black');
            }
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
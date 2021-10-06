<?php

require '../controllers/controller-user.php';

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap" rel="stylesheet">
    <title>Document</title>
</head>


<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Kaisei Tokumin', serif;
        background-color: #1a1d29;

    }

    .box2 {
        margin: 0 auto;
        text-align: center;
    }

    .table {
        border-collapse: collapse;
        width: 100%;
        border-top-right-radius: 10px 10px;
        border-top-left-radius: 10px 10px;
        background-color: rgb(255, 255, 255, 0.8);
        border-radius: 5px;
        width: 50%;
        margin: 0 auto;
        margin-top: 8%;
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


    li {
        display: inline-block;
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

    table {

        width: 50%;
        border-radius: 10px;
        border-collapse: collapse;

    }

    .box2 {

        width: 80%;
    }


    .content {

        color: white;
        height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Kaisei Tokumin', serif;
    }

    .content-top {

        width: 600px;

    }

    .content-top span {

        display: flex;
        justify-content: space-between;
        margin-left: 10%;
        margin-right: 10%;
    }


    .main-content img:hover {

        transform: scale(1.2)
    }

    .content-top p {
        border: 2px grey solid;
        background: grey;
    }



    .content-top h3 {

        margin-left: 5%;
    }

    .text {

        color: white;
    }

    .main-content {
        border: 1px solid grey;
        border-radius: 5px;
    }


    .main-content span button {

        margin-bottom: 3%;

    }


    .main-content span svg {

        width: 5%;
        height: 1%;
        background: white;
        border-radius: 100px;

    }

    .navbar-brand {

        font-family: 'Mouse Memoirs', sans-serif;
        font-size: xx-large;
    }



    .lastfilm {
        margin-top: 10%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2rem;
        font-family: 'Kaisei Tokumin', serif;
        color: white;
    }

    .lastfilm .left {
        width: 10%;
        height: 3px;
        margin: 10px 15px;

    }

    .lastfilm .right {
        width: 10%;
        height: 3px;
        margin: 10px 15px;
    }

    .card-body {

        align-items: center;
        text-align: center;
        height: 70px;
    }


    .card a img {
        opacity: 1;
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
    }

    .card:hover a img {
        opacity: .5;
    }



    @media screen and (max-width: 576px) {

        body {
            font-size: 14px;
        }

        .content h2 {
            margin-left: 10%;
        }

        .content p {
            width: 100%;
        }

        .main-content {
            width: 90%;
            margin-left: 5%;
        }

        .main-content span button {
            width: 45%;
            height: 20px;
            font-size: 12px;
            justify-content: space-between;
            padding: 0;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            left: 0;
            min-width: 120px;
        }

        .lastfilm {
            font-size: 15px;
            margin-top: 30%;
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

        }

        .card-body p {
            font-size: 10px !important;
        }

        .main-cards {
            margin-top: 0 !important;
        }
    }
</style>


<body>


    <nav class="navbar navbar-expand-lg navbar navbar-dark fixed-top" id="personalColor">
        <div class="container-fluid container">
            <a class="navbar-brand" href="../index.php">MegaCritic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link cool-link" href="allmycritics.php">Liste de films</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cool-link" href="user.php">Mon compte</a>
                    </li>
                </ul>
                <form class="d-flex" method="GET">
                    <input name="searchInput" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>




    <div class="lastfilm">
        <hr class="left"><span>Les films avec mes critiques </span>
        <hr class="right">
    </div>


    <div class="container-fluid mb-5 mt-5 main-cards">

        <div class="row">
            <?php foreach ($criticsAllArray as $allfilms) { ?>

                <div class="col-sm-4 d-flex justify-content-around mt-4">
                    <div class="card" style="width: 16rem;">
                        <a href="indi.php?id=<?= $allfilms['critics_id']  ?>"><img class="card-img-top" width="200px" height="300px" src="<?= $allfilms['critics_poster']  ?>" alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text"><?= $allfilms['critics_film_title']  ?></p>
                        </div>
                    </div>
                </div>


            <?php } ?>
        </div>
    </div>



    <?php

    include 'foot.php';

    ?>

    <script>
        var personal = document.getElementById('personalColor');


        window.addEventListener('scroll', function() {

            if (window.pageYOffset > 20) {
                personal.setAttribute("style", "background-color: black");
            } else {
                personal.removeAttribute('style', 'background-color: black');
            }
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
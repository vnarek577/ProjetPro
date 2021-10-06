<?php
require '../controllers/controller-user.php';


if (isset($_SESSION['user_pseudo'])) {

    if (isset($_GET['id'])) {

        $idMovie = $_GET['id'];
        $allComentsUsers = $userObj->afficheAllComments($idMovie);
        $id = $_SESSION['user_id'];
        $commentEsis = $userObj->checkComment($id, $idMovie);

        if (isset($_POST['decButton'])) {
            unset($_SESSION['user_pseudo']);
            session_destroy();
            header("location: index.php");
        }
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/individuel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<style>
    .card {

        border: none;
        border-radius: 4px
    }

    .cardos {

        width: 90%;
        margin: 0 auto;
    }

    .dots {
        height: 4px;
        width: 4px;
        margin-bottom: 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block
    }

    .badge {
        padding: 7px;
        padding-right: 9px;
        padding-left: 16px;
        box-shadow: 5px 6px 6px 2px #e9ecef
    }

    .user-img {
        margin-top: 4px
    }

    .check-icon {
        font-size: 17px;
        color: #c3bfbf;
        top: 1px;
        position: relative;
        margin-left: 3px
    }

    .form-check-input {
        margin-top: 6px;
        margin-left: -24px !important;
        cursor: pointer
    }

    .form-check-input:focus {
        box-shadow: none
    }

    .icons i {
        margin-left: 8px
    }

    .reply {
        margin-left: 12px
    }

    .reply .delete {
        color: #b7b4b4
    }

    .reply .delete:hover {
        color: red;
        cursor: pointer
    }


    .reply .change {
        color: #b7b4b4
    }

    .reply .change:hover {
        color: green;
        cursor: pointer
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

    .mega {

        font-family: 'Mouse Memoirs', sans-serif;
        font-size: xx-large;
    }

    .all {

        margin: 0;
        padding: 0;
        background-color: #1a1d29;
        font-family: 'Kaisei Tokumin', serif;

    }

    .third-main {

        margin: 0 auto;
        width: 60%;
        border-style: inset;
        border-radius: 30px;

    }


    .third-main .third-main-topic .avis .myOnip {

        display: flex;
        justify-content: center;

    }

    .third-main .third-main-topic .avis .text {

        width: 100%;
        text-align: center;

    }

    .second-main {

        margin: 0 auto;
        width: 60%;

    }

    .second-main-topic {

        display: flex;
        justify-content: center;
        align-items: center;
        border-style: inset;
        border-radius: 30px;
    }


    .main-content {

        margin: 0 auto;
        width: 60%;
        margin-top: 10%;

    }

    .main-content-topic {

        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }


    .role {

        width: 150%;
    }

    .second-main .plot {

        width: 100%;
        text-align: center;

    }

    .sinopsys .logo {

        display: flex;
        justify-content: center;
        align-items: center;
        font-size: x-large;
    }

    .an {
        color: grey;
    }

    .release {
        color: white;
    }

    .deetails h4 {
        color: white;
    }


    .heros {

        display: flex;
        justify-content: center;
        align-items: center;
    }


    .modalInput input:focus {
        outline: none;
    }

    .modalInput input {
        border: none;
    }

    .deleteAvis {

        color: red;
    }

    .changeAvis {

        color: green;
    }

    .deleteAll {
        margin-left: 10%;
    }

    @media screen and (max-width: 576px) {

        body {
            font-size: 14px;
        }

        .main-content-topic {

            display: block;
        }

        .image {
            text-align: center;
        }

        .image img {

            width: 150px;
            margin-top: 40%;
        }

        .deetails {
            font-size: 15px;
            text-align: center;
        }

        .deetails h4 {
            margin-top: 20px;
            font-size: 20px;
        }

        .other-details {

            font-size: 15px;
            text-align: center;

        }

        .other-details .role {

            font-size: 20px;
            width: 100%;
        }

        .second-main {
            width: 100%;
        }

        .third-main {

            width: 100%;
        }

    }
</style>

<body class="all">



    <?php if (isset($_SESSION['user_pseudo'])) {  ?>
        <!-- <nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="personalColor">
            <div class="container-fluid container">
                <a class="navbar-brand" href="../index.php">MegaCritic</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link cool-link" aria-current="page">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cool-link" href="allmycritics.php">List des films</a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <button class="dropbtn bg-dark decconect"><?= $_SESSION['user_pseudo'] ?> <img width="50px" src=""></button>
                        <div class="dropdown-content color">
                            <a href="user.php">Compte</a>
                            <form action="" method="POST" novalidate>
                                <a><button name="deconectButton" type="submit" class="decconect">Déconnexion</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav> -->

        <nav class="navbar navbar-expand-lg navbar navbar-dark fixed-top" id="personalColor">

            <div class="container-fluid container">
                <a class="navbar-brand" href="../index.php"><span class="mega">MegaCritic</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="allmycritics.php" class="nav-link cool-link" aria-current="page">Liste de films</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cool-link" href="user.php">Mon compte</a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <button class="dropbtn bg-dark decconect"><?= $_SESSION['user_pseudo'] ?> <img width="50px" src=""></button>
                        <div class="dropdown-content color">
                            <a href="user.php">Compte</a>
                            <form action="" method="POST" novalidate>
                                <a><button name="deconectButton" type="submit" class="decconect">Déconnexion</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    <?php } else { ?>

        <!-- <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="allmycritics.php">List de films</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user.php">Mon compte</a>
                        </li>
                    </ul>
                    <div class="dropdown" style="float:right;">
                        <button class="dropbtn bg-dark" disabled>Connexion</button>
                        <div class="dropdown-content color">
                            <a href="connect.php">Connexion</a>
                            <a href="form.php">Inscription</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav> -->

    <?php } ?>

    <?php if (isset($_GET['id'])) { ?>
        <div class="main-content">
            <div class="main-content-topic">
                <div class="image">
                    <img width="200px" src="<?= $getIdFilm['critics_poster'] ?>">
                </div>
                <div class="deetails">
                    <h4 class=""><?= $getIdFilm['critics_film_title'] ?></h4>
                    <p><span class="an">Année : </span><span class="release"><?= $getIdFilm['critics_release'] ?></span></p>
                    <p><span class="text-secondary">Genres: </span><span class="text-white"><?= $getIdFilm['critics_genre']  ?></span></p>
                    <p><span class="text-secondary">Durée: </span><span class="text-white"><?= $getIdFilm['critics_runtime'] ?></span></p>
                    <p><span class="text-secondary">Realisateur: </span><span class="text-white"><?= $getIdFilm['critics_director'] ?></span></p>
                </div>
                <div class="other-details">
                    <span class="text-secondary">IMDb: </span><span class="imdb role"><?= $getIdFilm['critics_imdbRating']  ?></span>
                    <?php
                    $cast = explode(',', $getIdFilm['critics_cast']);
                    $cast = implode('<br/>', $cast);
                    ?>
                    <p class="role"><span class="text-secondary">Rôles principaux:</span><br><span class="text-white"><?= $cast  ?></span></p>
                </div>
            </div>
        </div>

        <div class="second-main mt-5">
            <div class="second-main-topic">
                <div class="sinopsys">
                    <p class="text-secondary logo">Sinopsis:</p>
                    <p class="text-white plot"><?= $getIdFilm['critics_plot'] ?></p>
                </div>
            </div>
        </div>


        <div class="third-main mt-5">
            <div class="third-main-topic">
                <div class="avis">
                    <p class="text-secondary myOnip">Avis personnelle:</p>
                    <p class="text-white text"><?= $getIdFilm['critics_text'] ?></p>
                    <div class="deleteAll">
                        <?php if (isset($_SESSION['user_admin']) && $_SESSION['user_admin'] == 1) {  ?>

                            <small class="deleteAvis" data-bs-toggle="modal" data-bs-target="#delete">Supprimer</small>
                            <span class="dots"></span>
                            <small class="changeAvis" data-bs-toggle="modal" data-bs-target="#change">Modifier</small>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>










        <div class="modal fade" id="change" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Changement de l'avis personnel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body modalInput">
                        <form method="POST">
                            <input name="personalCritic" value="<?= $getIdFilm['critics_text'] ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>

                        <button type="submit" name="changeCritic" class="btn btn-success">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Suppression de l'avis personnel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body modalInput">

                        <p>Êtes-vous sur de vouloir supprimer l'avis personnel?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                        <form method="POST">
                            <button type="submit" name="deleteCritic" class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="headings d-flex justify-content-between align-items-center mb-3">
                        <h5 class="text-white">Les commentaires</h5>
                    </div>
                    <?php if (isset($_SESSION['user_pseudo'])) { ?>

                        <?php foreach ($allComentsUsers as $comment) { ?>

                            <div class="cardos">
                                <div class="card p-3 mt-5">
                                    <div class="netu">
                                        <div class="netu-main d-flex justify-content-center text-primary">
                                            <p><?= $comment['user_pseudo'] ?></p>
                                        </div>
                                        <div class="netu-content d-flex justify-content-between">
                                            <p><?= $comment['comments_comment'] ?></p>
                                            <p><?= $comment['comments_date_ajout'] ?></p>
                                        </div>
                                    </div>
                                    <div class="action d-flex justify-content-between mt-2 align-items-center">
                                        <div class="reply px-4">
                                            <?php if ($_SESSION['user_id'] == $comment['user_id']) { ?>

                                                <small class="delete" data-bs-toggle="modal" data-bs-target="#deleteView">Supprimer</small>
                                                <span class="dots"></span>
                                                <small class="change" data-bs-toggle="modal" data-bs-target="#changeView">Modifier</small>

                                                <div class="modal fade" id="changeView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Changement du commentaire</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body modalInput">
                                                                <form method="POST">
                                                                    <input name="commentText" value="<?= $comment['comments_comment'] ?>">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                                                                <button type="submit" value="<?= $comment['comments_id'] ?>" name="changeUserView" class="btn btn-success">Modifier</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="deleteView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Suppression du commentaire</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body modalInput">
                                                                <form method="POST">
                                                                    <p>Êtes-vous sur de vouloir supprimer votre commentaire?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                                                                <button type="submit" value="<?= $comment['comments_id'] ?>" name="deleteUserView" class="btn btn-danger">Supprimer</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php } elseif (isset($_SESSION['user_admin']) && $_SESSION['user_admin'] == 1) { ?>
                                                <small class="delete" data-bs-toggle="modal" data-bs-target="#">Supprimer</small>
                                            <?php } ?>


                                        </div>
                                    </div>
                                </div>
                            </div>


                        <?php } ?>
                    <?php } ?>


                </div>
            </div>
        </div>






        <div class="errors">
            <p class="text-danger"><?= isset($errors['changeUserView']) ? $errors['changeUserView'] : '' ?></p>

            <p class="text-danger"><?= isset($errors['comment']) ? $errors['comment'] : '' ?></p>
        </div>
        <?php

        include 'commentaire.php';

        ?>

    <?php } else { ?>

        <p>Veuillez selectionner un film dans la liste</p>
        <a class="btn btn-secondary" href="allmycritics.php">Liste</a>

    <?php } ?>




    <?php

    include 'foot.php';

    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


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

</body>

</html>
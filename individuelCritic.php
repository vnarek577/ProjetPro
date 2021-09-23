<?php
require './controllers/controller-user.php';


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
    <link rel="stylesheet" href="./assets/individuel.css">
    <title>Document</title>
</head>

<style>
    .modalInput input:focus {
        outline: none;
    }

    .modalInput input {
        border: none;
    }

    .personalView {

        margin-left: 7%;

    }

    .role {

        width: 80%;

    }

    .imdb {

        font-size: x-large;
        color: green;

    }

    .change {

        margin-left: 30%;

    }


    @media screen and (max-width: 576px) {
        body {
            background-color: red !important;
        }

        .role {
            margin-top: 0;
            margin: 0 auto;
            text-align: center;

        }

        .about {

            margin: 0 auto;

        }

        .photo {

            margin: 0 auto;
        }

        .plot {

            margin: 0 auto;
            width: 50%;

        }

        .sino {
            margin-top: 50%;
        }
    }

    .errors {
        text-align: center;
    }

    .plot {
        width: 100%;
        margin-left: 17%;
    }

    .sino {
        margin-left: 22%;
    }
</style>

<body>



    <?php if (isset($_SESSION['user_pseudo'])) {  ?>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
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
                        <button class="dropbtn bg-dark" disabled><?= $_SESSION['user_pseudo'] ?></button>
                        <div class="dropdown-content color">
                            <a href="user.php">Compte</a>
                            <form action="" method="POST" novalidate>
                                <a><button name="decButton" type="submit" class="decconect">Déconnexion</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    <?php } else { ?>

        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
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
        </nav>

    <?php } ?>

    <?php if (isset($_GET['id'])) { ?>
        <div class="container d-flex justify-content-center  hi">
            <div class="row">
                <div class="col-md-2 d-flex flex-column align-items-end mt-5 photo">
                    <p class="photo"><img width="200px" src="<?= $getIdFilm['critics_poster'] ?>"></p>
                </div>
                <div class="col-md-5 d-flex flex-column  mt-5 about">
                    <h4 class="mt-4"><?= $getIdFilm['critics_film_title'] ?></h4>
                    <p class="">Année : <?= $getIdFilm['critics_release'] ?></p>
                    <p class="">Genres: <?= $getIdFilm['critics_genre']  ?></p>
                    <p class="">Durée: <?= $getIdFilm['critics_runtime'] ?></p>
                    <p class="">Realisateur: <?= $getIdFilm['critics_director'] ?></p>
                </div>
                <div class="col-md-5 d-flex flex-column align-items-center mt-5">
                    <span class="mt-4 role">IMDb:</span><span class="imdb role"><?= $getIdFilm['critics_imdbRating']  ?></span>
                    <?php
                    $cast = explode(',', $getIdFilm['critics_cast']);
                    $cast = implode('<br/>', $cast);
                    ?>
                    <p class="mt-3 role"><strong>Rôles principaux:</strong><br> <?= $cast  ?></p>
                </div>
            </div>
        </div>


        <div class="ligne mt-5 sinopsis"></div>

        <h5>
            <p class="hi mt-5 sino">Sinopsis:</p>
        </h5>

        <div class="container d-flex justify-content-center">

            <div class="row">
                <div class="col-6 d-flex flex-column align-items-end  plot">
                    <p class="plot"><?= $getIdFilm['critics_plot'] ?></p>
                </div>
                <div class="col-md-2 d-flex flex-column align-items-start mt-5 about"></div>
                <div class="col-md-2 d-flex flex-column align-items-center mt-5"></div>

            </div>
        </div>
        <div class="ligne"></div>
        <p class="mt-3 personalView"><strong>Avis personnelle:</strong> <?= $getIdFilm['critics_text'] ?></p>

        <?php if (isset($_SESSION['user_admin']) && $_SESSION['user_admin'] == 1) {  ?>

            <button name="deleteButton" type="submit" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#change">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
            </button>

            <button name="deleteButton" type="submit" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                </svg>
            </button>

        <?php } ?>


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


        <?php if (isset($_SESSION['user_pseudo'])) { ?>

            <?php foreach ($allComentsUsers as $comment) { ?>

                <div class="comment mt-5 shadow-sm">
                    <strong>
                        <p class="pseudo"><?= $comment['user_pseudo'] ?></p>
                        <p class="date ms-3"> Publié le <?= $comment['comments_date_ajout'] ?></p>
                    </strong>
                    <label class="pb-3 ms-3"> Avis: <?= $comment['comments_comment'] ?></label>
                </div>


                <?php if ($_SESSION['user_id'] == $comment['user_id']) { ?>
                    <button name="" type="submit" class="btn btn-sm btn-success change" data-bs-toggle="modal" data-bs-target="#changeView">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                    </button>

                    <button name="" type="submit" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteView">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                        </svg>
                    </button>
                <?php } ?>

            <?php } ?>
        <?php } ?>



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
                        <button type="submit" value="<?= $comment['comments_id'] ?>" name="deleteUserView" class="btn btn-danger">Modifier</button>
                        </form>
                    </div>
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




    <footer class="bg-light text-center text-lg-start">
        <!-- <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Footer text</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                        aliquam voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Footer text</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                        aliquam voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>               
            </div> -->
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>

    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
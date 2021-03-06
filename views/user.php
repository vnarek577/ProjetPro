<?php

require '../controllers/controller-user.php';


if (isset($_SESSION['user_id']) and isset($_SESSION['user_pseudo']) and isset($_SESSION['user_mail'])) {
    $pseudo =  $_SESSION['user_pseudo'];
    $mail =  $_SESSION['user_mail'];
    $userId = $_SESSION['user_id'];
}

if (isset($_POST['deconectButton'])) {

    unset($_SESSION['user_pseudo']);
    session_destroy();

    header("location: ../index.php");
}

if (!isset($_SESSION['user_pseudo'])) {
    header("location: ../index.php");
}

$userId = $_SESSION['user_id'];



$viewArrayUser = $userObj->afficheMilaComment($userId);

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Kaisei Tokumin', serif;
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
    }
</style>

<body class="bg-dark">


    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="personalColor">
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
                        <a class="nav-link cool-link" href="allmycritics.php">Liste de films</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button class="dropbtn bg-dark decconect"><?= $_SESSION['user_pseudo'] ?> <img width="50px" src=""></button>
                    <div class="dropdown-content color">
                        <a href="user.php">Compte</a>
                        <form action="" method="POST" novalidate>
                            <a><button name="deconectButton" type="submit" class="decconect">D??connexion</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="content-top">
            <h3>Compte</h3>
            <div class="main-content">
                <p>D??tails de votre compte</p>
                <span>Pseudo: <?php echo $pseudo ?><a href="modifProfile.php"><img width="23px" src="../assets/img/edit-circle-line.svg"></a></span>
                <hr>
                <span><?php echo $mail ?><a href="modifEmail.php"><img width="23px" src="../assets/img/edit-circle-line.svg"></a></span>
                <hr>
                <span>Mot de passe : ********<a href="modifPassword.php"><img width="23px" src="../assets/img/edit-circle-line.svg"></a></span>
                <hr>
                <span><button type="button" class="btn btn-sm btn-secondary" name="showId" value="<?php echo $userId ?>" data-bs-toggle="modal" data-bs-target="#change">Mes commentaires</button><button name="deleteButton" type="submit" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hello"> Supprimer compte</button></span>
            </div>
        </div>
    </div>
    <div class="text">
    </div>



    <div class="modal fade" id="change" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Liste de films avec mon commentaire</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modalInput">

                    <table class="table" style="width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Affiche</th>
                            </tr>
                        </thead>

                        <?php foreach ($viewArrayUser as $affiche) { ?>
                            <tbody>
                                <tr>

                                    <th scope="row">1</th>

                                    <td><?= $affiche['comments_date_ajout']  ?></td>
                                    <td><?= $affiche['critics_film_title']  ?></td>
                                    <td><a href="individuelCritic.php?id=<?= $affiche['critics_id']  ?>"><img width="50px" src="<?= $affiche['critics_poster']  ?>"></a></td>
                                </tr>
                            </tbody>

                            <?php if (!isset($affiche['critics_film_title'])) { ?>
                                <p>Vous avez pas laisser encore aucune messages </p>
                            <?php } ?>

                        <?php } ?>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>








    <div class="modal fade" id="hello" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Suppression du compte</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ??tes-vous s??r de vouloir supprimer votre compte, <strong><?= $_SESSION['user_pseudo']    ?></strong> ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                    <form method="POST">
                        <button type="submit" name="deleteButton" class="btn btn-danger" value="<?= $_SESSION['user_id']   ?>">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="d-flex justify-content-center box">
        <?php if (isset($_SESSION['erreur'])) {  ?>
            <div id="info" class="box1">
                <img width="22px" src="../assets/img/valis.png">
            </div>
            <div id="hell" class="validation"><?= $_SESSION['erreur'] ?></div>
            <?php unset($_SESSION['erreur']); ?>
        <?php } ?>
    </div>


    <?php

    include 'foot.php';

    ?>




    <script language='javascript'>
        temp = document.getElementById('info');
        hello = document.getElementById('hello');

        setTimeout('hell.style.display="none"', 3000);
        setTimeout('temp.style.display="none"', 3000);
    </script>

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
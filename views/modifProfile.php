<?php

require '../controllers/controller-user.php';

if (isset($_SESSION['user_id']) and isset($_SESSION['user_pseudo']) and isset($_SESSION['user_mail']) and isset($_SESSION['user_lastname']) and isset($_SESSION['user_firstname'])) {
    $pseudo =  $_SESSION['user_pseudo'];
    $mail =  $_SESSION['user_mail'];
    $lastname =  $_SESSION['user_lastname'];
    $firstname =  $_SESSION['user_firstname'];
    $id = $_SESSION['user_id'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

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

    .navbar-brand {

        font-family: 'Mouse Memoirs', sans-serif;
        font-size: xx-large;
    }

    .hello {
        width: 90%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 70vh;
    }

    .form-control {
        width: 200%;
    }

    @media screen and (max-width: 576px) {

        

        .form-control {
            width: 120%;
        }
     
    }
</style>



<body class="bg-dark">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
    </nav>

    <form method="POST">
        <div class="hello">
            <div class="main-content">
                <h4 class="text-white">Modifier Pseudo</h4>
                <div class="form-floating mb-2">
                    <input name="pseudo" type="text" style="height: 50px;" class="form-control" id="floatingInput" placeholder="Pseudo" value="<?= $_SESSION['user_pseudo']  ?>" disabled>
                    <label style="font-size: 14px;" for="floatingInput">Pseudo actuelle</label>
                </div>
                <div class="form-floating">
                    <input name="pseudo" type="text" style="height: 50px;" class="form-control" id="floatingInput" placeholder="Pseudo">
                    <label style="font-size: 14px;" for="floatingInput">Nouvel pseudo</label>
                </div>

                <label style="font-size: 15px;" class="text-danger"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></label>
                
                <div>
                    <button id="he" name="updateProfileIndividual" type="submit" class="btn btn-sm btn-primary " value="<?= $_SESSION['user_id'] ?>">Change</button>
                    <button onclick="javascript:history.back();" name="updateProfileIndividual" type="button" class="btn btn-sm btn-secondary" value="">Annuler</button>
                </div>
            </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
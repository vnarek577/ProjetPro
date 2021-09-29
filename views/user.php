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
    <title>Document</title>
</head>

<style>
    body {
        margin: 0;
        padding: 0;
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
        font-size: 16px;
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
    }

    .validation {
        display: flex;
        width: 23%;
        height: 30px;
        background-color: green;
        color: white;
        align-items: center;
        border-top-right-radius: 7px;
        border-bottom-right-radius: 7px;
    }

    .box1 {
        background-color: green;
        height: 30px;
        width: 40px;
        text-align: center;
        border-top-left-radius: 7px;
        border-bottom-left-radius: 7px;
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
        font-family: Source Sans Pro;
        font-weight: lighter;
        font-size: 20px;
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

        border: 2px red solid;

        width: 30%;
        background-color: #C8C8C8;
    }

    table {

        border: 2px solid red;
        width: 50%;
        border-radius: 10px;
        border-collapse: collapse;

    }

    .box2{

        width: 80%;
    }
  
    
</style>

<body>


    <nav class="navbar navbar-light bg-secondary">
        <div class="container-fluid">



            <a href="../index.php" class="navbar-brand"><img width="50px" src="dsq.png"></a>

            <div class="container">
                <li><a href="../index.php" class="cool-link">Accueil</a></li>
                <li><a href="" class="cool-link"></a></li>
                <li><a href="allmycritics.php" class="cool-link">List des films</a></li>
            </div>

            <div class="dropdown" style="float:right;">
                <button class="dropbtn"><?= $_SESSION['user_pseudo'] ?> <img width="50px" src=""></button>
                <div class="dropdown-content color">
                    <a href="user.php">Compte</a>
                    <form action="" method="POST" novalidate>
                        <a><button name="deconectButton" type="submit" class="decconect">Déconnexion</button></a>
                    </form>
                </div>
            </div>
        </div>
    </nav>



    <div class="box2">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Détails de votre compte</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>Votre Pseudo: <strong><?php echo $pseudo ?></strong></td>
                    <td><a href="modifProfile.php"><img width="23px" src="../assets/img/edit.svg"></a></td>

                </tr>
                <tr>

                    <td><?php echo $mail ?></td>
                    <td><a href="modifEmail.php"><img width="23px" src="../assets/img/edit.svg"></a></td>
                </tr>
                <tr>


                    <td>Mot de passe : ********</td>
                    <td><a href="modifPassword.php"><img width="23px" src="../assets/img/edit.svg"></a></td>
                </tr>
                <tr>

                    <form method="POST">

                        <td></td>
                    </form>
                    <td><button type="button" class="btn btn-sm btn-secondary" name="showId" value="<?php echo $userId ?>" data-bs-toggle="modal" data-bs-target="#change">Mes commentaires</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="d-flex align-items-center flex-column detail" style="height: 200px;">
        <button name="deleteButton" type="submit" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hello"> Supprimer compte</button>
    </div>
    

    <div class="d-flex justify-content-center box">
        <?php if (isset($_SESSION['erreur'])) {  ?>


            <div id="info" class="box1">

                <img width="22px" src="../assets/img/header.jpg">

            </div>

            <div id="hell" class="validation"><?= $_SESSION['erreur'] ?></div>

            <!-- on detruit la variable de session -->
            <?php unset($_SESSION['erreur']); ?>
        <?php } ?>
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
                                <!-- <tr>
                                    <th scope="row">2</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr> -->
                            </tbody>
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
                    Êtes-vous sûr de vouloir supprimer votre compte, <strong><?= $_SESSION['user_pseudo']    ?></strong> ?
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






    <script language='javascript'>
        temp = document.getElementById('info');
        hello = document.getElementById('hello');

        setTimeout('hell.style.display="none"', 2000);
        setTimeout('temp.style.display="none"', 2000);
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
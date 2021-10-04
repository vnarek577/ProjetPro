<?php

require '../controllers/controller-user.php';


?>




<!DOCTYPE html>
<html lang="fr">

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
    <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap" rel="stylesheet">
    <title>Formulaire</title>
</head>

<body>
    <style>

        body{
            margin: 0;
            padding: 0;
            background-color: #1a1d29;
            color: white;
            font-family: 'Kaisei Tokumin', serif;

        }
        .box2 {

            text-align: center;
            border-radius: 2px;
            position: absolute;
            margin-bottom: 15px;
            /* background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3); */
            padding: 30px;
            justify-content: center;
            left: 60%;
            border-radius: 30px;
            width: 400px;
            top: 15%;

        }


     

        .contain {
            display: flex;
            width: 100%;
        }

        .box1 {

            background-image: url("../assets/img/col.jpg");
            height: 720px;
            width: 54%;
            background-repeat: no-repeat;
        }

        .logo{

            font-family: 'Mouse Memoirs', sans-serif;
            text-decoration: none;
            color: white;
            font-size: 2rem;

        }

        .logo:hover{

            color: white;

        }

        @media screen and (max-width: 576px) {
            .box1 {
                display: block;
                width: 100%;
                margin-top: 120%;
            }

            .box2 {
                top: 0;
                left: 0;
                width: 100%;
                margin-bottom: 50%;
            }

        }
    </style>
    <div class="contain">
        <div class="box1"></div>

        <form action="" method="post" novalidate>
            <div class="box2">
                <a href="../index.php" class="logo">MegaCritic</a>
                <p class="titre">Inscription</p>
                <hr>
                <div class="form-group mt-2">
                    <input type="text" name="pseudo" class="form-control text-center" id="user" placeholder="Pseudo">
                </div>
                <div class="form-group mt-2">
                    <input type="email" name="mail" class="form-control text-center" id="mail" placeholder="Mail" required>
                </div>

                <div class="form-group mt-2">
                    <input type="password" name="password" class="form-control text-center" id="psw" placeholder="Password">
                </div>
                <div class="form-group w-100 mt-2">
                    <input type="password" name="confirmPassword" class="form-control text-center" id="confirm" placeholder="Confirmer Password">
                </div>


                <p class="text-danger mt-3"><?= $errors['hello'] ?? '' ?></p>

                <button name="AddUser" type="submit" class="btn btn-secondary mt-3">Inscription</button>
                <p class="mt-2">
                    <span>Déjà un compte?</span><a href="connect.php"> Connectez-vous</a>
                </p>
            </div>
        </form>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
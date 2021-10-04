<?php

require '../controllers/controller-user.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background: #1a1d29;
        font-family: 'Kaisei Tokumin', serif;
    }

    .titre {

        text-align: center;
    }

    .hello {
        text-align: center;
        border-radius: 50px;
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        justify-content: center;
        align-items: center;
        width: 25%;
        height: 78%;
    }

    .main {
        justify-content: center;
        display: flex;
        align-items: center;
        height: 90vh;

    }

    .connect {
        font-size: larger;
        font-weight: bold;
    }

    @media screen and (max-width: 576px) {
        .hello {
            top: 20%;
            left: 0;
            transform: unset;
            width: 80%;
        }
    }

    div a {

        text-decoration: none;

    }

    .change {
        display: flex;
        justify-content: space-between;
        font-size: 15px;
        margin: 10px 20px;
    }

    #pseudo {
        height: 50px;
    }

    .nick2 {
        font-size: 13px;
    }

    .nick {
        font-size: 13px;
    }

    #psw {
        height: 50px;
    }

    #password1 {
        height: 50px;
    }
</style>

<body>





    <form action="" method="POST" novalidate>
        <div class="main">
            <div class="hello mt-5">
                <img width="130px" src="../assets/img/password.svg">
                <p>Modifier le mot de passe</p>
                <div class="form-floating mb-2">
                    <input type="password" name="password" class="form-control w-100" id="password1" placeholder="Password">
                    <label class="nick2" for="password1">Password</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password2" class="form-control w-100" id="psw" placeholder="Confirm password">
                    <label class="nick" for="pseudo">Confirm password</label>
                </div>
                <p class="text-danger"><?= isset($errors['motDePass']) ? $errors['motDePass'] : '' ?></p>

                <label>
                    <a href="mtdOublier.php" style="color: black;">
                        Mot de pass oublié?
                    </a>
                </label>
                <div class="but">
                    <button type="submit" name="changePSW" class="btn btn-primary mt-4">Enregistrer</button>
                </div>


                <p class="mt-3">
                    <a href="index.php">Revenir a l'accueil<a>
                </p>
            </div>
        </div>
    </form>








</body>

</html>
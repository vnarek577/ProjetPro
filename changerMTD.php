<?php

require 'controllers/controller-user.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body {

        margin: 0;
        padding: 0;
        background-image: url("../assets/img/back.jpg");

    }


    .titre {

        text-align: center;
    }

    .hello {

        text-align: center;
        border-radius: 2px;
        position: absolute;
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        justify-content: center;
        left: 42%;
        border-radius: 10px;
        width: 300px;
    }

    .connect {
        font-size: larger;
        font-weight: bold;
    }

    @media screen and (max-width: 576px) {
        .hello {
            top: 20%;
            left: 20%;
            transform: unset;
        }
    }

    label button {

        display: flex;
        align-items: center;
        position: absolute;
        top: 50%;
        right: 40px;
        transform: translateY(-260%);
        width: 30px;
        color: black;
        transition: all 0.2s;
        border: none;
        background-color: white;
        opacity: 0.5;

    }

    span button {

        display: flex;
        align-items: center;
        position: absolute;
        top: 50%;
        right: 56px;
        transform: translateY(-340%);
        width: 30px;
        color: black;
        transition: all 0.2s;
        border: none;
        background-color: white;
        opacity: 0.5;
    }

    label a {

        text-decoration: none;

    }
</style>

<body>





    <form action="" method="POST" novalidate>

        <div class="hello mt-5">
            <p class="connect">Modifier le mot de passe</p>
            <div class="form-group w-100">

                <?php if (isset($errors['erreur'])) {  ?>
                    <input type="password" name="password" class="form-control w-100 is-invalid" id="password1" placeholder="Password">

                <?php } else { ?>

                    <input type="password" name="password" class="form-control w-100" id="password1" placeholder="Password">

                <?php } ?>

            </div>
            <div class="form-group w-100 mt-3">
                <?php if (isset($errors['erreur'])) {  ?>

                    <input type="password" name="password2" class="form-control w-100 is-invalid" id="psw" placeholder="Password">


                <?php } else { ?>
                    <input type="password" name="password2" class="form-control w-100" id="psw" placeholder="Password">


                <?php } ?>
            </div>
            <label for="formGroupExampleInput" class="text-danger mt-2"><?= $errors['erreur'] ?? '' ?></label>
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

    </form>








</body>

</html>
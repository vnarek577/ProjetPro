<?php

require 'controllers/controller-user.php';

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
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<style>
    body {
        font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    .hello {

        margin-left: 20%;
        margin-top: 10%;
    }

    .optionnel {

        padding: 0 161px;
        color: orange;
        font-size: 15px;


    }

    .optionnel1 {

        margin-left: 140px;
        color: orange;
        font-size: 15px;

    }
</style>

<body>



    <form method="POST">
        <div class="hello">
            <h3>Modifier profile</h3>

            <div class="form-floating mb-2">
                <input name="lastname" type="text" style="height: 50px;" class="form-control w-25 champ" id="floatingInput" placeholder="name@example.com" value="<?= $_SESSION['user_lastname']  ?>">
                <label style="font-size: 15px;" for="floatingInput">Nom <span class="optionnel">(Optionnel)</span></label>
            </div>
            <div class="form-floating mb-2">
                <input name="firstname" type="text" class="form-control w-25 champ" id="floatingPassword" placeholder="Password" value="<?= $_SESSION['user_firstname']   ?>">
                <label for="floatingPassword">Prenom <span class="optionnel1">(Optionnel)</span></label>
            </div>
            <div class="form-floating mb-2">
                <input name="pseudo" type="text" style="height: 50px;" class="form-control w-25 champ" id="floatingInput" placeholder="name@example.com" value="<?= $_SESSION['user_pseudo']  ?>">
                <label style="font-size: 15px;" for="floatingInput">Pseudo</label>
            </div>
            <div class="form-floating">
                <input name="mail" type="email" style="height: 50px;" class="form-control w-25 champ" id="floatingInput" placeholder="name@example.com" value="<?= $_SESSION['user_mail']   ?>">
                <label style="font-size: 15px;" for="floatingInput">Email adresse</label>
            </div>

            <label style="font-size: 15px;" class="text-danger"><?= $errors['mail'] ?? '' ?></label>
            <div>
                <button id="he" name="updateProfileIndividual" type="submit" class="btn btn-primary mt-3" value="<?= $_SESSION['user_id'] ?>">Change</button>
                <button onclick="javascript:history.back();" name="updateProfileIndividual" type="button" class="btn btn-secondary mt-3" value="">Annuler</button>
            </div>

        </div>
    </form>

</body>

</html>
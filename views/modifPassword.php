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
    <title>Document</title>
</head>
<style>
    .hello {

        margin-left: 20%;
        margin-top: 10%;

    }

    a{

        font-size: 13px;
        margin-left: 1%;

    }
</style>

<body>


    <form method="POST">
        <div class="hello">
            <h3>Modifier le mot de passe</h3>
            <div class="form-floating mb-2">
                <input name="pswActuel" type="password" style="height: 50px;" class="form-control w-25 mt-2" id="floatingInput" placeholder="name@example.com">
                <label style="font-size: 15px;" for="floatingInput">Mot de passe actuel</label>
                <a href="mtdOublier.php">Mot de passe oublié ?</a>
            </div>
            <div class="form-floating">
                <input name="newPSW" type="password" style="height: 50px;" class="form-control w-25 mt-2" id="floatingInput" placeholder="name@example.com">
                <label style="font-size: 15px;" for="floatingInput">Nouveau mot de passe</label>
            </div>
            <div class="form-floating">
                <input name="confirmNewPSW" type="password" style="height: 50px;" class="form-control w-25 mt-2" id="floatingInput" placeholder="name@example.com">
                <label style="font-size: 15px;" for="floatingInput">Confirmation du mot de passe</label>
            </div>

            <p style="font-size: 15px;" class="text-danger"><?= $errors['motDePass'] ?? '' ?></p>


            <button id="he" name="updatePasswordIndividual" type="submit" class="btn btn-primary mt-2" value="<?= $_SESSION['user_id'] ?>">Change</button>
            <button onclick="javascript:history.back();" name="updateProfileIndividual" type="button" class="btn btn-secondary mt-2" value="">Annuler</button>


        </div>
    </form>




</body>

</html>
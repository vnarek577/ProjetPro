<?php
require '../controllers/controller-user.php';


if (isset($_SESSION['user_id']) and isset($_SESSION['user_mail'])) {

    $id = $_SESSION['user_id'];
    $mail =  $_SESSION['user_mail'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres du compte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<style>
    .hello {

        margin-left: 20%;
        margin-top: 10%;

    }

    .validation {


        width: 28%;
        height: 10%;
        background-color: green;
        color: white;
        border-radius: 2px;



    }
</style>

<body>






    <form method="POST">
        <div class="hello">
            <h3>Modifier l'adresse e-mail</h3>
           
                
                <p class="validation"> </p>


          

            <div class="form-floating mb-2">
                <input name="mailActuel" type="text" style="height: 50px;" class="form-control w-25" id="floatingInput" placeholder="name@example.com" value="<?= $_SESSION['user_mail']   ?>" disabled>
                <label style="font-size: 15px;" for="floatingInput">E-mail actuel</label>
            </div>
            <div class="form-floating">
                <input name="newMail" type="email" style="height: 50px;" class="form-control w-25" id="floatingInput" placeholder="name@example.com">
                <label style="font-size: 15px;" for="floatingInput">Nouvel e-mail</label>

            </div>

            <label style="font-size: 15px;" class="text-danger"><?= $errors['mail'] ?? '' ?></label>



            <div>
                <button id="he" name="updateEmailIndividual" type="submit" class="btn btn-sm btn-primary mt-3" value="<?= $_SESSION['user_id'] ?>">Change</button>

            <?php if(isset($errors['mail']))  { ?>

               <a href="user.php"><button name="updateProfileIndividual" type="button" class="btn btn-sm btn-secondary mt-3" value="">Annuler</button></a>


            <?php } else { ?>
                <button onclick="javascript:history.back();" name="updateProfileIndividual" type="button" class="btn btn-sm btn-secondary mt-3" value="">Annuler</button>
                <?php } ?>
            </div>

        </div>
    </form>




    <script>




    </script>




</body>

</html>
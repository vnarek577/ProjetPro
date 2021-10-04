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
        height: 65%;
    }

    .main {
        justify-content: center;
        display: flex;
        align-items: center;
        height: 90vh;

    }

    #email {
        height: 50px;
    }

    .nick {
        font-size: 13px;
    }


    @media screen and (max-width: 576px) {
        .hello {


            width: 80%;
        }
    }
</style>

<body>

    <form action="" method="POST" novalidate>

        <div class="main">
            <div class="hello">
                <img width="130px" src="../assets/img/cadenas.svg">
                <p>Password oublier?</p>

                <label for="formGroupExampleInput" class="text-danger "><?= isset($errors['mail']) ? $errors['mail'] : '' ?></label>
                <?php if (isset($_SESSION['ok'])) {  ?>

                    <span for="formGroupExampleInput" class="text-success"><?= $_SESSION['ok'] ?></span>

                    <?php unset($_SESSION['ok']); ?>

                <?php } else { ?>


                <?php } ?>
                <div class="form-floating">
                    <input type="email" name="pswOublier" class="form-control w-100" id="email" placeholder="Email">
                    <label class="nick" for="email">E-mail</label>
                </div>
                <p>Veuillez entrez votre e-mail pour restaurer mot de passe</p>

                <button name="recoverPSW" type="submit" class="btn btn-primary">Envoyer</button>
                <a href="connect.php"><button type="button" class="btn btn-secondary">Annuler</button></a>

            </div>
        </div>
    </form>






</body>

</html>
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
        height: 70%;
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

    .nick {
        font-size: 13px;
    }

    #psw {
        height: 50px;
    }
</style>

<body>



    <form action="" method="POST" novalidate>
        <div class="main">
            <div class="hello">

                <p class="connect"><img width="130px" src="../assets/img/profile.svg"></p>
                <?php if (isset($_SESSION['inscription'])) {  ?>

                    <span id="hello" for="formGroupExampleInput" class="text-success"><?= $_SESSION['inscription'] ?></span>

                    <?php unset($_SESSION['inscription']); ?>

                <?php } else { ?>


                <?php } ?>

                <?php if (isset($_SESSION['mot_de_pass'])) {  ?>

                    <span id="hello" for="formGroupExampleInput" class="text-success"><?= $_SESSION['mot_de_pass'] ?></span>

                    <?php unset($_SESSION['mot_de_pass']); ?>

                <?php } else { ?>


                <?php } ?>


    
                <div class="form-group w-100">
                    <?php if (isset($errors['erreur'])) {  ?>
                        <div class="form-floating">
                            <input type="text" name="pseudo" class="form-control w-100 is-invalid" id="pseudo" placeholder="Pseudo">
                            <label class="nick" for="pseudo">Pseudo</label>
                        </div>


                    <?php } else { ?>
                        <div class="form-floating">
                            <input type="text" name="pseudo" class="form-control  w-100" id="pseudo" placeholder="Pseudo">
                            <label class="nick" for="pseudo">Pseudo</label>
                        </div>

                    <?php } ?>

                </div>
                <div class="form-group w-100 mt-3">
                    <?php if (isset($errors['erreur'])) {  ?>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control w-100 is-invalid" id="psw" placeholder="Password">
                            <label class="nick" for="psw">Password</label>
                        </div>

                    <?php } else { ?>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control w-100" id="psw" placeholder="Password">
                            <label class="nick" for="psw">Password</label>
                        </div>

                    <?php } ?>
                </div>
                <label for="formGroupExampleInput" class="text-danger "><?= isset($errors['erreur']) ? $errors['erreur'] : '' ?></label>
                <div class="change">
                    <a href="mtdOublier.php" style="color: black;">
                        Mot de pass oublié?
                    </a>
                    <span class="ms-5">Pas de compte ? <a href="form.php">Inscrivez-vous<a></span>

                </div>
                <div class="but mt-3">
                    <button type="submit" name="connectToUser" class="btn btn-primary mt-2">Connexion</button>
                </div>
            </div>
        </div>

    </form>



    <script>
        hello = document.getElementById('hello');

        setTimeout('hello.style.display="none"', 4000);




        function Afficher() {
            var img = document.getElementById("eye-slash");
            var input = document.getElementById("psw");
            var img_src = "https://www.pngfind.com/pngs/m/59-593921_png-file-svg-password-eye-icon-png-transparent.png";
            if (input.type === "password") {
                input.type = "text";
                img = img_src;

            } else {
                input.type = "password";
            }
        }
    </script>


</body>

</html>
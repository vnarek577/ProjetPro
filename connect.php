<?php
require './controllers/controller-user.php';
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

<?php if(isset($_SESSION['inscription'])) {  ?>

    <label id="hello" for="formGroupExampleInput" class="text-danger mt-2"><?= $_SESSION['inscription'] ?></label>

    <?php unset($_SESSION['inscription']); ?>

<?php }else{ ?> 

   
<?php } ?>

    <form action="" method="POST" novalidate>

        <div class="hello mt-5">
            <p class="connect">Connexion</p>
            <div class="form-group w-100">

                <?php if (isset($errors['erreur'])) {  ?>
                    <input type="text" name="pseudo" class="form-control w-100 is-invalid" id="pseudo" placeholder="Pseudo">

                <?php } else { ?>

                    <input type="text" name="pseudo" class="form-control w-100" id="pseudo" placeholder="Pseudo">

                <?php } ?>

            </div>
            <div class="form-group w-100 mt-3">
                <?php if (isset($errors['erreur'])) {  ?>

                    <input type="password" name="password" class="form-control w-100 is-invalid" id="psw" placeholder="Password">
                    <span>
                        <button type="button" onclick="Afficher()">
                            <svg id="eye-slash" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z" />
                                <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z" />
                                <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z" />
                            </svg>
                        </button>
                    </span>

                <?php } else { ?>
                    <input type="password" name="password" class="form-control w-100" id="psw" placeholder="Password">
                    <label>
                        <button type="button" onclick="Afficher()">
                            <svg id="eye-slash" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z" />
                                <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z" />
                                <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z" />
                            </svg>
                        </button>
                    </label>
                    

                <?php } ?>
            </div>
            <label for="formGroupExampleInput" class="text-danger mt-2"><?= isset($errors['erreur']) ? $errors['erreur'] : '' ?></label>
            <label>
                <a href="mtdOublier.php" style="color: black;">
                    Mot de pass oublié?
                </a>
            </label>
            <div class="but">
                <button type="submit" name="connectToUser" class="btn btn-primary mt-4">Connexion</button>
            </div>
            <p class="mt-4">Pas de compte ? <a href="form.php">Inscrivez-vous<a></p>
        </div>

    </form>



    <script>
        hello = document.getElementById('hello');

        setTimeout('hello.style.display="none"', 2000);




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
<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<style>
    textarea {

        width: 40%;
        border-radius: 8px;
        margin-left: auto;
        margin-right: auto;
        overflow: auto;


    }

    .control {
        text-align: center;
        margin-top: 10%;
    }

    @media screen and (max-width: 576px) {

        textarea {

            width: 80%;

        }
    }
</style>

<body>

    <?php if (isset($_SESSION['user_pseudo'])) { ?>

        <form action="" method="POST">
            <div class="control">
                <div class="input-group">
                    <textarea class="textarea is-success" id="story" name="story" rows="5" cols="33"></textarea>
                </div>
                <div class="mt-2 pb-5">
                    <button class="btn btn-sm btn-secondary" name="commentButton" type="submit">Envoyer un nouveau commentaire</button>
                </div>
            </div>
        </form>
    <?php } else { ?>



        <form action="" method="POST">
            <div class="control">
                <div class="center mt-5">
                    <p class="text-danger"><?= isset($errors['registration']) ? $errors['registration'] : '' ?> </p>

                </div>
                <div class="input-group">
                    <textarea class="textarea is-success" id="story" name="story" rows="5" cols="33"></textarea>
                </div>
                <div class="mt-2 pb-5">
                    <button class="btn btn-sm btn-secondary" name="novalide" type="submit">Envoyer un nouveau commentaire</button>
                </div>
            </div>
        </form>

    <?php } ?>

</body>



</html>
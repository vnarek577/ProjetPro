<?php

require '../controllers/controller-user.php';


if (isset($_SESSION['user_admin']) && $_SESSION['user_admin'] == 0) {


    header("Location: user.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Document</title>
</head>

<style>
    .buttons {
        background-color: #1a1d29;
        height: 50px;
        width: 100%;
        border-radius: 30px;
        margin: 0 auto;
        width: 60%;
        opacity: 0.5;
    }

    .buttons .icons i {

        color: white;
        padding: 15px;
        font-size: 20px;
    }

    .buttons .icons {

        display: flex;
        justify-content: space-evenly;

    }

    .main-content .titre {
        display: flex;
        justify-content: center;
    }

    .main-content .content {

        display: flex;
        align-items: center;
        justify-content: center;
        height: 80vh;

    }
</style>

<body>

    <div class="buttons fixed-bottom">
        <div class="icons">
            <i class="fas fa-home"></i>
            <i class="fas fa-user"></i>
            <i class="fas fa-images"></i>
            <a href="critics.php"><i class="fas fa-plus"></i></a>
            <i class="fas fa-sign-out-alt"></i>
        </div>
    </div>

    <div class="main-content">
        <div class="titre">
            <h1>Admin</h1>
        </div>
        <div class="content">
            Bonjour
        </div>
    </div>

</body>

</html>
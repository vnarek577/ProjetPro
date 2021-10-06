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
    body {
        margin: 0;
        padding: 0;

    }

    .main-content {
        width: 15%;
        background-color: #1a1d29;
        height: 100vh;
    }

    .log-out {
        position: absolute;
        bottom: 0;
    }

    .main-content .main-content-content {
        padding: 10px;
    }

    .main-content-content .main ul,
    li,
    i {

        text-decoration: none;
        list-style: none;
        color: white;

    }

    .main-content-content .main ul a {

        text-decoration: none;

    }

    .main-content-content .logo p {
        padding: 40px;
        margin-left: 5%;
        font-size: xx-large;
        color: white;
    }

    .main-content-content .log-out,
    ul,
    li,
    i {
        text-decoration: none;
        padding: 10px;
        list-style: none;
        color: white;
    }


    .main-all {

        margin: 0 auto;
        width: 100%;
        
    }

    .main-all .head{

        height: 100px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: xx-large;
        border-bottom: 1rem solid;
        background: grey;
    }

    .main {
        display: flex;
        justify-content: space-evenly;
    }
</style>

<body>

    <div class="main">
        <div class="main-content">
            <div class="main-content-content">
                <div class="logo">
                    <p>Admin</p>
                </div>
                <div class="main">
                    <ul>
                        <li><i class="fas fa-home"></i>Accueil</li>
                        <li><i class="fas fa-user"></i>Profile</li>
                        <a href="write.php"><li><i class="fas fa-images"></i>Aperçu</li></a>
                        <a href="critics.php">
                            <li><i class="fas fa-plus"></i>Ajout du film</li>
                        </a>
                    </ul>
                </div>
                <div class="log-out">
                    <ul>
                        <li>
                            <i class="fas fa-sign-out-alt"></i>Quitter
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-all">
            <div class="head">
                <p>Ajout du film</p>
            </div>
            <div class="cont">
                hello
            </div>
        </div>
    </div>


</body>

</html>
<?php

require './controllers/controller-user.php';


if(isset($_SESSION['user_admin']) && $_SESSION['user_admin'] == 0){


    header("Location: user.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        margin: 0px;
        height: 50vh;

    }

    .center {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-input {
        width: 250px;
        padding: 20px;
        background: #fff;
        border: 2px dashed #555;
    }

    .form-input input {
        display: none;
    }

    .form-input label {
        display: block;
        width: 100%;
        height: 50px;
        line-height: 50px;
        text-align: center;
        background: #333;
        color: #fff;
        font-size: 15px;
        font-family: "Open Sans", sans-serif;
        text-transform: Uppercase;
        font-weight: 600;
        border-radius: 10px;
        cursor: pointer;
    }

    .form-input img {
        width: 100%;
        display: none;
        margin-top: 10px;
    }
</style>

<body>

    <h5> HELLO <?= $_SESSION['user_pseudo']   ?></h5>

    <a href="critics.php">Insertion du contenu de film</a>



    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>

</body>

</html>
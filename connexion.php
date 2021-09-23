<?php

// var_dump($_COOKIE);
if (isset($_COOKIE['user'])) {

    $user = $_COOKIE['user'];
    // $decodeUser = json_decode($user);

    // foreach($cookie as $hi){
    //     echo $hi;
    // }
}


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
        border-radius: 30px;
    }

    .connect {
        font-size: larger;
        font-weight: bold;
    }

    @media screen and (max-width: 576px) {
    .hello {
        top: 20%;
        left: 15%;
        transform: unset;
    }
    }
</style>

<body>






    <h3 class="titre"> Votre inscription a bien été prise en compte<br>
        Veuillez vous connecter<br></h3>
    <p></p>
    <div class="hello">
        <p class="connect">Connexion</p>
        <div class="form-group w-100">
            <input type="text" name="prenom" class="form-control w-100" id="pseudo" placeholder="Pseudo">
        </div>
        <div class="form-group w-100 mt-3">
            <input type="password" name="prenom" class="form-control w-100" id="psw" placeholder="Password">
        </div>
        <div class="but">
            <button type="submit" class="btn btn-primary mt-4">Connexion</button>
        </div>
    </div>






</body>

</html>
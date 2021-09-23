<?php

if (isset($_GET['idMovie'])) {

    $movie = $_GET['idMovie'];

    $response = file_get_contents("https://imdb-api.com/fr/API/Title/k_x2oqqm37/$movie/FullActor,Posters,Ratings,");

    $data = json_decode($response, true);

    var_dump($data);

}


if(isset($_SESSION['user_pseudo'])){

    echo 'hello';
    
}

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
    .box1 {
        margin-left: 10px;
    }

    .hi {

        width: 50%;
        text-align: left;
    }
</style>
</body>




<div id="affiche" class="container d-flex justify-content-start">
    <div class="box">
        <img width="200px" src="<?php echo $data['image'] ?>">
    </div>
    <div class="box1">
        <h6><?php echo $data['title'] ?></h6>
        <p>Date de sortie: <?php echo $data['year'] ?></p>
        <p>Genres: <?php echo $data['genres'] ?></p>
        <p>imDb rating: <?php echo $data['imDbRating'] ?></p>
        <p>Durée: <?php echo $data['runtimeStr'] ?></p>
        <p>Realisateur: <?php echo $data['directors'] ?></p>

        <p>Rôles principaux: <?php echo $data['starList'][0]['name'] ?>, <?php echo $data['starList'][1]['name'] ?>, <?php echo $data['starList'][2]['name'] ?> , <?php echo $data['starList'][3]['name'] ?></p>
    </div>
</div>
<a href="critics.php"><button>Critics</button></a>
<div class="">


    <p>
    <h6>SYNOPSIS</h6>
    </p>
    <p class="hi"><?php echo $data['plotLocal'] ?></p>

<button>Upload</button>







    </body>

</html>
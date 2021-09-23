<?php


require './controllers/controller-user.php';

if (isset($_GET['idMovie'])) {

    var_dump($_GET['idMovie']);

    $id = $_GET['idMovie'];
    // $response = file_get_contents("https://movie-database-imdb-alternative.p.rapidapi.com/?i=$id&type=movie&r=json&y=2019&plot=short");
    // $data = json_decode($response, true);

    $curl = curl_init();

    //Disable CURLOPT_SSL_VERIFYHOST and CURLOPT_SSL_VERIFYPEER by
    //setting them to false.
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://movie-database-imdb-alternative.p.rapidapi.com/?i=" . $id . "&type=movie&r=json&plot=short",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: movie-database-imdb-alternative.p.rapidapi.com",
            "x-rapidapi-key: 004c4baaa0msh3824c1386b26984p1994d2jsn6c5f4409ae78"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    $data = json_decode($response, true);

    curl_close($curl);

    ////////////////////
    //// Debug mode ////
    ////////////////////
    // if ($err) {
    // echo "cURL Error #:" . $err;
    // } else {
    //   var_dump($response);
    //}

    // var_dump($data);
}



?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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



<form action="" method="POST">
    <div id="affiche" class="container d-flex justify-content-start">

        <div class="box">
            <input type="hidden" name="poster" value="<?= $data['Poster'] ?>">
            <img width="200px" src="<?= $data['Poster'] ?>">
        </div>
        <div class="box1">
            <input name="title" type="hidden" value="<?= $data['Title'] ?>">
            <h4><?= $data['Title'] ?></h4>

            <input name="release" type="hidden" value="<?= $data['Year'] ?>">
            <p>Année : <?= $data['Year'] ?></p>


            <input name="genre" type="hidden" value="<?= $data['Genre'] ?>">
            <p>Genres: <?= $data['Genre']  ?></p>

            <input name="imdbRating" type="hidden" value="<?= $data['imdbRating'] ?>">
            <p>imDb rating: <?= $data['imdbRating']  ?></p>

            <input name="Runtime" type="hidden" value="<?= $data['Runtime'] ?>">
            <p>Durée: <?= $data['Runtime'] ?></p>

            <input name="Director" type="hidden" value="<?= $data['Director'] ?>">
            <p>Realisateur: <?= $data['Director'] ?></p>

            <input style="" type="hidden" name="cast" value="<?= $data['Actors'] ?>">
            <p>Rôles principaux: <?= $data['Actors'] ?></p>

        </div>
    </div>
    <h5>
        <p class="hi">Sinopsis:</p>
    </h5>
    <input style="" type="hidden" name="plot" value="<?= $data['Plot'] ?>">
    <p class="hi"><?php echo $data['Plot'] ?></p>
    <p>Mon Avis</p>
    <textarea name="critic">

    </textarea>

    <input name="imdbId" type="hidden" value="<?= $data['imdbID'] ?>">
    <button type="submit" name="btn-upload">Upload</button>


</form>

<a href="critics.php"><button>Retour Search</button></a>






<div class="d-flex align-items-center flex-column bd-highlight mb-3" style="height: 200px;">

    <?php if (isset($errors['film'])) { ?>
        <div class="p-2 bd-highlight text-danger"><?= $errors['film']  ?></div>
    <?php } ?>
</div>




</body>

</html>
<?php


require '../controllers/controller-user.php';

if (isset($_GET['idMovie'])) {



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
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Document</title>
</head>

<style>
    /* .box1 {
        margin-left: 10px;
    }

    .hi {

        width: 50%;
        text-align: left;
    } */

    /* * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    } */



    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;

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
        width: 80%;
        margin-top: 6%;

    }

    .main-all .head {

        height: 100px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: xx-large;
        border-bottom: 1rem solid grey;
        background: #1a1d29;
        color: white;
    }

    .main {
        display: flex;
        justify-content: space-evenly;
    }

    .monster-content {

        margin: 0 auto;
        width: 80%;
        height: 62%;
        display: flex;
        align-items: center;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        margin-bottom: 5%;

    }

    .monster-content:hover {


        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);

    }

    .monster {
        height: 86vh;

        justify-content: center;
        align-items: center;

    }

    .monster-main {
        width: 100%;
        display: flex;
        justify-content: center;

    }

    .monster-main-content {

        text-align: center;

    }

    .monster .monavis {

        margin: 0 auto;
        width: 40%;
        justify-content: center;
        height: 38%;
        text-align: center;
    
    }

    .monster .monavis textarea {

        height: 150px;
        width: 100%;
        border-radius: 30px;
    }

    .selection {

        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;

    }

    .her {

        display: flex;
        justify-content: space-evenly;
    }


    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
        padding: 2px 16px;
    }


</style>
</body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-evenly" id="navbarSupportedContent">
            <form class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 hui">
                    <li class="nav-item">
                        <a class="nav-link me-5" aria-current="page" href="../index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" aria-current="page" href="user.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" aria-current="page" href="write.php">Aperçu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" aria-current="page" href="critics.php">Ajouter</a>
                    </li>
                </ul>
            </form>
            <!-- <form class="d-flex justify-content-end">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link me-5" aria-current="page" href="#">Quitter</a>
                    </li>
                </ul>
            </form> -->
        </div>
    </div>
</nav>





<?php if (isset($_GET['idMovie'])) { ?>

    <div class="main-all">
        <div class="head">
            <p>Aperçu</p>
        </div>

    </div>


    <form action="" method="POST">
        <div class="monster">
            <div class="monster-content">
                <div class="monster-poster">
                    <input type="hidden" name="poster" value="<?= $data['Poster'] ?>">
                    <img width="240px" src="<?= $data['Poster'] ?>">
                </div>

                <div class="monster-main">
                    <div class="monster-main-content">
                        <input name="title" type="hidden" value="<?= $data['Title'] ?>">
                        <h4><?= $data['Title'] ?></h4>
                        <input style="" type="hidden" name="plot" value="<?= $data['Plot'] ?>">
                        <p><?php echo $data['Plot'] ?></p>
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
            </div>
            <?php if (isset($errors['film'])) { ?>
                <span class="p-2 bd-highlight text-danger"><?= $errors['film']  ?></span>
            <?php } ?>
            <div class="monavis">
                <textarea name="critic"></textarea><br>
                <input name="imdbId" type="hidden" value="<?= $data['imdbID'] ?>">
                <button type="submit" name="btn-upload" class="btn btn-sm btn-secondary">Upload</button>

            </div>
        </div>
    </form>




    <!-- <form action="" method="POST">
                    <div id="affiche" class="d-flex gap-2 col-6 mx-auto">

                        <div class="box">
                            <input type="hidden" name="poster" value="<?= $data['Poster'] ?>">
                            <img width="200px" src="<?= $data['Poster'] ?>">
                        </div>
                    </div>
                    <div id="affiche" class="d-flex gap-2 col-4 mx-auto">
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


                </form>  -->






<?php } else { ?>

    <div class="selection">

        <h1>Veuillez selectionner un film</h1>

    </div>

<?php } ?>

<!-- <div class="card d-grid gap-2 col-6 mx-auto" style="width: 18rem;">
                <input type="hidden" name="poster" value="<?= $data['Poster'] ?>">
                <img src="<?= $data['Poster'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <input name="title" type="hidden" value="<?= $data['Title'] ?>">
                    <input name="release" type="hidden" value="<?= $data['Year'] ?>">
                    <h5 class="card-title"><?= $data['Title'] ?>(<?= $data['Year'] ?>)</h5>
                    
                    <p class="card-text"><?php echo $data['Plot'] ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div> -->












<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        min-height: 100vh;
    }

    a {
        text-decoration: none;
    }

    li {
        list-style: none;
    }

    h1,
    h2 {

        color: #444;
    }

    .side-menu {
        position: fixed;
        background: #f05462;
        width: 20vw;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .side-menu .brand-name {

        height: 10vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .side-menu li {

        font-size: 24px;
        padding: 10px 40px;
        color: white;
        display: flex;
        align-items: center;
    }

    .side-menu li:hover {

        background: white;
        color: #f05462;
    }

    .container {
        position: absolute;
        right: 0;
        width: 80vw;
        height: 100vh;
        background: #f1f1f1;
    }

    .container .header {

        position: fixed;
        top: 0;
        right: 0;
        width: 80vw;
        height: 10vh;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

    }

    .container .header .nav {

        width: 90%;
        display: flex;
        align-items: center;
    }

    .container .header .nav .search {

        flex: 3;
        display: flex;
        justify-content: center;
    }

    .container .header .nav .search input[type=text] {

        border: none;
        background: #f1f1f1;
        padding: 10px;
        width: 50%;
    }

    .container .header .nav .search button {
        width: 40px;
        height: 40px;
        border: none;

    }

    .container .header .nav .user {

        flex: 1;
        background: hotpink;

    }

    .container .content {

        min-height: 60vh;
        display: flex;
        justify-content: space-around;
        align-items: flex-start;
        flex-wrap: wrap;

    }

    .container .content .recent-payments {

        min-height: 80vh;
        flex: 5;
        background: white;
        margin: 0 25px 25px 25px;
        display: flex;
        align-items: center;
        margin-top: 10%;
    }
</style>
</body>


<div class="side-menu">
    <div class="brand-name">
        <h1>Admin</h1>
    </div>
    <ul>
        <li>Profile</li>
        <li>Aperçu</li>
        <li><a href="adminPage.php">Ajouter un film</a></li>
    </ul>
</div>

<div class="container">
    <div class="header">
        <div class="nav">
            <div class="search">
                <input id="movieSearch" type="text" placeholder="Search..">
                <button id="buttonSearch" type="button">Search</button>
            </div>
        </div>
    </div>
</div>




<div class="container">
    <div class="header">
        <div class="nav">
            <div class="search">
                <h1>Aperçu</h1>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="recent-payments">

            <?php if (isset($_GET['idMovie'])) { ?>
                <form action="" method="POST">
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


                </form>

            <?php } else { ?>

                <div class="d-grid gap-2 col-6 mx-auto">

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


        </div>
    </div>
</div>

<a href="critics.php"><button>Retour Search</button></a>






<div class="d-flex align-items-center flex-column bd-highlight mb-3" style="height: 200px;">

    <?php if (isset($errors['film'])) { ?>
        <div class="p-2 bd-highlight text-danger"><?= $errors['film']  ?></div>
    <?php } ?>
</div>




</body>

</html>
<?php

require '../controllers/controller-user.php';

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

<body>


    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="allmycritics.php">List de films</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user.php">Mon compte</a>
                    </li>
                </ul>
                <form class="d-flex" method="GET">
                    <input name="searchInput" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>









    <div class="container_fluid">

        <div class="row">
            <?php foreach ($criticsAllArray as $allfilms) { ?>

                <div class="col-sm-4 d-flex justify-content-around mt-4">
                    <div class="card" style="width: 12rem;">
                        <a href="individuelCritic.php?id=<?= $allfilms['critics_id']  ?>"><img class="card-img-top" width="200px" src="<?= $allfilms['critics_poster']  ?>" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="card-title"><?= $allfilms['critics_film_title']  ?></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Date du sortie: <?= $allfilms['critics_release']  ?></li>
                        </ul>
                        <form method="POST" action="">
                            <ul class="list-group list-group-flush col align-self-center">
                                <a href="individuelCritic.php?id=<?= $allfilms['critics_id']  ?>" class="card-link">laisser avis</a>
                            </ul>
                        </form>
                        <!-- <div class="card-body">
                        <a href="<?php $allfilms['critics_id']  ?>" class="card-link">laisser avis</a>
                    </div> -->
                    </div>
                </div>


            <?php } ?>
        </div>
    </div>




</body>

</html>
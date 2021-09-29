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
    <title>Document</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    } */

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

        min-height: 50vh;
        flex: 5;
        background: white;
        margin: 0 25px 25px 25px;
        align-items: center;
        margin-top: 10%;
    }

</style>

<body>


    <div class="side-menu">
        <div class="brand-name">
            <h1>Admin</h1>
        </div>
        <ul>
            <li>Profile</li>
            <li><a href="write.php">Aperçu</a></li>
            <li>Ajouter un film</li>
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
        <div class="content">
            <div class="recent-payments">

                <table class="table">
                    <thead>
                        <tr>
                            <th>Id IMDB</th>
                            <th>Nom du film</th>
                            <th>Date de sortie</th>
                            <th>Affiche</th>
                            <th>Selection</th>
                        </tr>
                    </thead>
                    <tbody id="tbodyMovie">

                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <h5> HELLO <?= $_SESSION['user_pseudo']   ?></h5>

    <a href="critics.php">Insertion du contenu de film</a> -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        const buttonSearch = document.getElementById('buttonSearch');
        buttonSearch.addEventListener('click', function() {

            let movie = movieSearch.value
            fetch(`https://movie-database-imdb-alternative.p.rapidapi.com/?s=${movie}&page=1&r=json`, {
                    "method": "GET",
                    "headers": {
                        "x-rapidapi-host": "movie-database-imdb-alternative.p.rapidapi.com",
                        "x-rapidapi-key": "004c4baaa0msh3824c1386b26984p1994d2jsn6c5f4409ae78"
                    }
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                    tbodyMovie.innerHTML = ''
                    data.Search.forEach(movie => {
                        let newTr = document.createElement('tr');
                        newTr.innerHTML = `
                            <td>${movie.imdbID}</th>
                            <td>${movie.Title}</th>
                            <td>${movie.Year}</td>
                            <td><img width="50px" src="${movie.Poster}"></td>
                            <td><a href="write.php?idMovie=${movie.imdbID}">write</a><td>
                        `
                        tbodyMovie.appendChild(newTr)
                    });



                })



        })
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <title>Document</title>
</head>

<style>
  body {
    margin: 0;
    font-family: sans-serif;
  }

  * {
    box-sizing: border-box;
  }

  .table {
    width: 100%;
    border-collapse: collapse;
  }

  .table td,
  .table th {
    padding: 12px 15px;
    border: 1px solid #ddd;
    text-align: center;
    font-size: 16px;
  }

  .table th {
    background-color: #1a1d29;
    color: #ffffff;
  }

  .table tbody tr:nth-child(even) {
    background-color: #f5f5f5;
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


  @media(max-width: 500px) {
    .table thead {
      display: none;
    }

    .table,
    .table tbody,
    .table tr,
    .table td {
      display: block;
      width: 100%;
    }

    .table tr {
      margin-bottom: 15px;
    }

    .table td {
      text-align: right;
      padding-left: 50%;
      text-align: right;
      position: relative;
    }

    .table td::before {
      content: attr(data-label);
      position: absolute;
      left: 0;
      width: 50%;
      padding-left: 15px;
      font-size: 15px;
      font-weight: bold;
      text-align: left;
    }
  }
</style>


<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">Admin</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-evenly" id="navbarSupportedContent">
        <form class="d-flex">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link me-5" aria-current="page" href="allmycritics.php">Liste de films</a>
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

      </div>
    </div>
  </nav>


  <div class="main-all mt-5">

    <form class="d-flex justify-content-center mb-2">
      <input id="movieSearch" class="form-control w-50" type="search" placeholder="Search" aria-label="Search">
      <button id="buttonSearch" class="btn btn-outline-success" type="button">Search</button>
    </form>

    <div class="head">
      <p>Ajout du film</p>
    </div>
    <div class="cont">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <form class="d-flex">

        </form>
      </nav>

      <table class="table">
        <thead>
          <tr>
            <th>Id IMDB</th>
            <th>Nom du film</th>
            <th>Date de sortie</th>
            <th>Affiche</th>
            <th>Critique</th>
          </tr>
        </thead>
        <tbody id="tbodyMovie">

        </tbody>
      </table>
    </div>






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
                            <td data-label="Id IMDB">${movie.imdbID}</th>
                            <td data-label="Nom du film">${movie.Title}</th>
                            <td data-label="Date de sortie">${movie.Year}</td>
                            <td data-label="Affiche"><img width="50px" src="${movie.Poster}"></td>
                            <td data-label="Critique"><a href="write.php?idMovie=${movie.imdbID}">écrire ma critique</a></td>
                            
                        `
              tbodyMovie.appendChild(newTr)
            });



          })



      })
    </script>

</body>

</html>
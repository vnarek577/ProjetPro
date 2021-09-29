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


    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <form class="d-flex">
            <input id="movieSearch" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button id="buttonSearch" class="btn btn-outline-success" type="button">Search</button>
        </form>
        </div>
        </div>
    </nav>


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
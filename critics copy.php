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
            fetch(`https://imdb-api.com/en/API/SearchTitle/k_x2oqqm37/${movie}`)
                .then(response => response.json())
                .then(data => {
                    tbodyMovie.innerHTML = ''
                    data.results.forEach(movie => {
                        let newTr = document.createElement('tr');
                        newTr.innerHTML = `
                            <td>${movie.id}</th>
                            <td>${movie.title}</th>
                            <td>${movie.description}</td>
                            <td><img width="50px" src="${movie.image}"></td>
                            <td><a href="writeCritic.php?idMovie=${movie.id}">write</a><td>
                        `
                        tbodyMovie.appendChild(newTr)
                    });



                })



        })
    </script>

</body>

</html>
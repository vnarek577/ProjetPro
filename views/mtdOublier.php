<?php

require '.controllers/controller-user.php';



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
    .table {


        width: 300px;
        align-items: center;
        margin: auto;

    }
</style>

<body>

    <form action="" method="POST" novalidate>
        <table class="table" align="center" valign="middle">
            <thead>
                <tr>
                    <th scope="col">Password oublier</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mail</td>
                    <td><input name="pswOublier"></td>
                </tr>
                <tr>
                    <td><button name="recoverPSW">Envoyer</button></td>
                </tr>
            </tbody>
        </table>
    </form>





</body>

</html>
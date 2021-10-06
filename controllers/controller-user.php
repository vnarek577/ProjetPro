<?php

session_start();

require '../models/database.php';
require '../models/user.php';


$errors = [];
$ok = [];
$userObj = new User();
$limit = 0;



$criticsAllArray = $userObj->afficheAllCritics();





if (isset($_POST['AddUser'])) {


    $mail = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);
    $pseudo =  htmlspecialchars($_POST['pseudo']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $passwordToCompare = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $UserArray = $userObj->checkPseudo($pseudo);
    if ($UserArray) {

        $errors['hello'] = 'pseudo exist';
    }


    $mailArray = $userObj->getUserInfosByMail($mail);
    if ($mailArray) {

        $errors['hello'] = 'email exist';
    }



    if ($passwordToCompare != $confirmPassword) {

        $errors['hello'] = 'mot de pass n\'est pas le même';
    }

    if (empty($mail) || empty($pseudo) || empty($password) || empty($confirmPassword)) {

        $errors['hello'] = 'Veuillez remplir tout les champs';
    }


    if (count($errors) == 0) {

        $allUserArray = $userObj->addUser($mail, $pseudo, $password);

        $_SESSION['inscription'] = "Votre inscription a bien été prise en compte";

        header('Location: connect.php');
    }
}


if (isset($_POST['connectToUser'])) {


    $connectPseudo = htmlspecialchars($_POST['pseudo']);
    $password = $_POST['password'];



    $UserConnectArray = $userObj->connectToAccount($connectPseudo);


    $isPasswordCorrect = password_verify($password, $UserConnectArray['user_password']);

    if (!$UserConnectArray) {
        $errors['erreur'] = 'Mauvais identifiant ou mot de passe !';
    }

    if ($isPasswordCorrect) {

        $_SESSION['user_id'] = $UserConnectArray['user_id'];
        $_SESSION['user_lastname'] = $UserConnectArray['user_lastname'];
        $_SESSION['user_firstname'] = $UserConnectArray['user_firstname'];
        $_SESSION['user_mail'] = $UserConnectArray['user_mail'];
        $_SESSION['user_admin'] = $UserConnectArray['user_admin'];
        $_SESSION['user_pseudo'] = $connectPseudo;

        var_dump($mailArray['user_mail']);

        // echo 'Vous êtes connecté !';
        header("Location: user.php");
    } else {
        $errors['erreur'] = 'Mauvais identifiant ou mot de passe !';
    }

    if (isset($_SESSION['user_pseudo'])) {

        header('Location: user.php');
    }


    if (isset($_SESSION['user_admin']) && $_SESSION['user_admin'] == 1) {

        header("Location: write.php");
    }
}








if (isset($_POST['recoverPSW'])) {


    // creation du Token
    $generer = openssl_random_pseudo_bytes(4);
    $token = bin2hex($generer);

    // On recupere les données en fonction du mail
    $inputMail = $_POST['pswOublier'];
    $userInfos = $userObj->getUserInfosByMail($inputMail);


    // on compte la longueur du tableau pour verifier que le user existe bien
    if (!$userInfos) {
        $errors['mail'] = 'mail inexistant';
    } 


    if(empty($inputMail)){
        $errors['mail'] = 'Veillez entrez le champ';
    }

    if (count($errors) == 0) {
        $TokenArray = $userObj->addTokentoUser($token, $userInfos['user_id']);
        mail($userInfos['user_mail'], 'Mot', 'Bonjour voici le lien pour restaurer votre mot de pass: http://newprojetpronarek//views/changerMTD.php?token_token=' . $token);
        $_SESSION['ok'] = "Un message a été envoyer";

    }
}


if (isset($_POST['changePSW'])) {

    $changeMtd2 = $_POST['password2'];
    $passwordNotHash = $_POST['password'];
    $password = password_hash($_POST['password'], PASSWORD_ARGON2ID);
    $token = $_GET['token_token'];

    if (isset($_GET['token_token'])) {

        if ($changeMtd2 != $passwordNotHash) {
            $errors['motDePass'] = "les mots de passe sont différents";
        }

        if (count($errors) == 0) {
            $userObj->addChangePassword($password, $token);
            header("Location: ./connect.php");
            $_SESSION["mot_de_pass"] = 'mot de passe modifié';
        }
    } else {
        // Message si pas de parametre d'url
        echo 'Le Token n\'est plus valide';
    }
}


if (isset($_POST['updateProfileIndividual'])) {

    $pseudo = $_POST['pseudo'];

    $id = $_POST['updateProfileIndividual'];




    $UserArray = $userObj->checkPseudo($pseudo);
    if ($UserArray) {

        $errors['mail'] = 'Pseudo exist';
    }


    if (empty($pseudo)) {

        $errors['mail'] = 'Veuillez entrez votre nouvel pseudo';
    }


    if (count($errors) == 0) {

        $ModifierArray = $userObj->getChangeProfile($pseudo, $id);

        $_SESSION['erreur'] = "Pseudo de votre compte a été modifiée";

        header('Location: user.php');



        $allUserArray = $userObj->afficherUserProfile($id);
        if ($allUserArray) {
            $_SESSION['user_id'] = $allUserArray['user_id'];
            $_SESSION['user_lastname'] = $allUserArray['user_lastname'];
            $_SESSION['user_firstname'] = $allUserArray['user_firstname'];
            $_SESSION['user_mail'] = $allUserArray['user_mail'];
            $_SESSION['user_pseudo'] = $allUserArray['user_pseudo'];



            echo '<script>alert("La modification a été effectuée")</script>';
        }
    }
}



if (isset($_POST['deleteButton'])) {
    var_dump($_POST);


    $id = $_POST['deleteButton'];
    header("refresh: 0");

    $deleteClient = $userObj->deleteUser($id);

    if (isset($_POST['deleteButton'])) {

        unset($_SESSION['user_pseudo']);
        session_destroy();

        header("location: ../index.php");
    }
}


if (isset($_POST['updateEmailIndividual'])) {



    $mail = $_POST['newMail'];

    $id =  $_POST['updateEmailIndividual'];





    $checkPSW = $userObj->getUserInfosByMail($mail);

    if ($checkPSW['user_mail']) {

        $errors['mail'] = 'E-mail existant';
    }



    if (empty($mail)) {

        $errors['mail'] = "Veuillez saissir votre e-mail";
    }


    if (count($errors) == 0) {

        $update = $userObj->ChangeMail($mail, $id);

        $_SESSION['erreur'] = "L'adresse e-mail de votre compte a été modifiée";

        header('Location: user.php');
    } elseif (empty($mail)) {


        $errors['mail'] = "Veuillez saissir votre e-mail";
    } else {

        $errors['ok'] = "L'adresse e-mail de votre compte a été modifiée";
    }

    $allUserArray = $userObj->afficherUserProfile($id);
    if ($allUserArray) {

        $_SESSION['user_mail'] = $allUserArray['user_mail'];
    }
}



if (isset($_POST['updatePasswordIndividual'])) {

    $oldPassword = $_POST['pswActuel'];
    $newPassword = password_hash($_POST['newPSW'], PASSWORD_ARGON2ID);
    $confirmPassword = $_POST['confirmNewPSW'];
    $newPassword2 = $_POST['newPSW'];


    $id =  $_POST['updatePasswordIndividual'];


    $checkPSW = $userObj->checkPassword($id);
    $isPasswordCorrect = password_verify($oldPassword, $checkPSW['user_password']);


    if (!$isPasswordCorrect) {

        $errors['motDePass'] = 'Veuillez saissir la bonne mot de passe actuelle';
    }


    if ($newPassword2 != $confirmPassword) {

        $errors['motDePass'] = "Les mots de passe sont différents";
    }

    if (empty($oldPassword) || empty($confirmPassword) || empty($newPassword2)) {

        $errors['motDePass'] = "Veuillez remplir tout les champs";
    }



    if (count($errors) == 0) {

        $update = $userObj->ChangePassword($newPassword, $id);
        $_SESSION['erreur'] = "Votre mot de passe a été modifié";
        header("Location: user.php");
    }
}


if (isset($_POST['commentButton'])) {


    $comment = $_POST['story'];

    $id = $_SESSION['user_id'];

    $idMovie = $_GET['id'];

    $he = date_default_timezone_get();

    $timestamp = strtotime($he);

    $date = date("m/d/Y", $timestamp);



    $commentExist = $userObj->checkComment($id, $idMovie);
    if ($commentExist) {
        $errors['comment'] = 'Vous avez déja publié';
    }

    if (count($errors) == 0) {
        $commentUser = $userObj->addCommentUser($comment, $id, $idMovie, $date);
        // $_SESSION['inscription'] = "Modifier";

    }
}


if (isset($_POST['novalide'])) {

    if (!isset($_SESSION['user_pseudo'])) {

        $errors['registration'] = 'Vous devez vous-connecter';
    }
}




if (isset($_POST['btn-upload'])) {


    $title = $_POST['title'];
    $release = $_POST['release'];
    $cast = $_POST['cast'];
    $imdbId = $_POST['imdbId'];
    $poster = $_POST['poster'];
    $cast = $_POST['cast'];
    $critic = $_POST['critic'];

    $genre = $_POST['genre'];
    $imdbRating = $_POST['imdbRating'];
    $runtime = $_POST['Runtime'];
    $director = $_POST['Director'];
    $plot = $_POST['plot'];


    $idButton = $_POST['btn-upload'];




    // on verif si le film exist par imdbID

    $film = $userObj->afficheCritics($imdbId);


    if ($film) {
        $errors['film'] = 'film déja exist';
    }


    if (count($errors) == 0) {

        $userObj->addFilmDetails($imdbId, $poster, $title, $release, $cast, $critic, $genre, $imdbRating, $runtime, $director, $plot);
        // $film = $userObj->afficheCritics($imdbId);

        header('Location: allmycritics.php');
    }
}



if (isset($_GET['id'])) {



    $getIdFilm = $userObj->afficheOneCritic($_GET['id']);
}




if (isset($_POST['changeCritic'])) {



    $criticText = $_POST['personalCritic'];

    $id = $_GET['id'];


    if (count($errors) == 0) {
        $arrayChangeText = $userObj->ChangeCritic($criticText, $id);
        header("refresh: 0");
    }
}



if (isset($_POST['idAfficheCritic'])) {



    $criticText = $_POST['personalCritic'];

    $id = $_GET['id'];

    var_dump($id);


    $arrayChangeText = $userObj->ChangeCritic($criticText, $id);
}


if (isset($_GET['searchInput']) and !empty($_GET['searchInput'])) {



    $searchInput = $_GET['searchInput'];


    $criticsAllArray = $userObj->addSearch($searchInput);
}


if (isset($_POST['idAfficheCritic'])) {

    $criticText = $_POST['personalCritic'];

    $id = $_GET['id'];

    var_dump($id);


    $arrayChangeText = $userObj->ChangeCritic($criticText, $id);
}

if (isset($_POST['deleteCritic'])) {

    $commingSoon = "À venir";

    $idMovie = $_GET['id'];
    $getIdFilm = $userObj->afficheOneCritic($_GET['id']);

    $personalView =  $commingSoon;


    if (count($errors) == 0) {
        $arrayChangeText = $userObj->deletePersonalView($idMovie, $personalView);
        header("refresh: 0");
    }
}



if (isset($_POST['changeUserView'])) {


    $commentId  =  $_POST['changeUserView'];
    $coment = $_POST['commentText'];

    if (empty($coment)) {

        $errors['changeUserView'] = "Vous ne pouvez pas laisser un commentaire vide";
    }

    if (count($errors) == 0) {
        $viewArray = $userObj->ChangeUserView($coment, $commentId);
    }
}


if (isset($_POST['deleteUserView'])) {



    $idComment = $_POST['deleteUserView'];

    $viewArray = $userObj->deleteUserView($idComment);
}


if (isset($_POST['deleteMovie'])) {

    $id = $_POST['deleteMovie'];

    header("refresh: 0");


    $deleteMovieArray = $userObj->deleteMovie($id);

}



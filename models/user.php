<?php

class User extends Database
{

    public function addUser($mail, $pseudo, $password)
    {
        $database = $this->connectDatabase();
        $myQuery = 'INSERT INTO `mila_user` (`user_mail`, `user_pseudo`, `user_password` , `user_admin`) VALUES (:user_mail, :user_pseudo, :user_password, :user_admin )';
        $queryClient = $database->prepare($myQuery);

        $queryClient->bindValue(':user_mail', $mail, PDO::PARAM_STR);
        $queryClient->bindValue(':user_pseudo', $pseudo, PDO::PARAM_STR);
        $queryClient->bindValue(':user_password', $password, PDO::PARAM_STR);
        $queryClient->bindValue(':user_admin', 0, PDO::PARAM_INT);

        $queryClient->execute();
    }


    public function checkPseudo($pseudo)
    {
        $database = $this->connectDatabase();
        $myQuery = 'SELECT * FROM `mila_user` WHERE user_pseudo = :verifUser';
        $queryClient = $database->prepare($myQuery);
        $queryClient->bindValue(':verifUser', $pseudo, PDO::PARAM_STR);
        $queryClient->execute();
        $fetch = $queryClient->fetch();
        return $fetch;
    }

    public function getUserInfosByMail($mail)
    {
        $database = $this->connectDatabase();
        $myQuery = 'SELECT * FROM `mila_user` WHERE user_mail = :mail';
        $queryClient = $database->prepare($myQuery);
        $queryClient->bindValue(':mail', $mail, PDO::PARAM_STR);
        $queryClient->execute();
        $fetch = $queryClient->fetch();
        return $fetch;
    }


    public function connectToAccount($connectPseudo)
    {
        $database = $this->connectDatabase();
        $myQuery = 'SELECT * FROM `mila_user` WHERE user_pseudo = :connectUser';
        $queryClient = $database->prepare($myQuery);

        $queryClient->bindValue(':connectUser', $connectPseudo, PDO::PARAM_STR);



        $queryClient->execute();

        $fetch = $queryClient->fetch();
        return $fetch;
    }

    public function afficherToken()
    {

        $database = $this->connectDatabase();
        $myQuery = 'SELECT * FROM mila_token';
        $queryClient = $database->query($myQuery); // query si on n'a pas de paramétres par rapport prepare
        $fetch = $queryClient->fetch(); //Permet de recuperer les donnes de la bdd
        return $fetch;
    }


    public function afficherUserProfile($id)
    {

        $database = $this->connectDatabase();
        $myQuery = 'SELECT * FROM `mila_user` WHERE user_id = :id';
        $queryClient = $database->prepare($myQuery); // query si on n'a pas de paramétres par rapport prepare

        $queryClient->bindValue(':id', $id, PDO::PARAM_STR);

        $queryClient->execute();

        $fetch = $queryClient->fetch(); //Permet de recuperer les donnes de la bdd
        return $fetch;
    }






    public function addTokentoUser($token, $userId)
    {


        $database = $this->connectDatabase();
        $myQuery = 'INSERT INTO `mila_token` (`token_token`, `user_id`) VALUES (:token_token, :user_id)
        ON DUPLICATE KEY UPDATE `token_token` = :token_token';
        $queryClient = $database->prepare($myQuery); // query si on n'a pas de paramétres par rapport prepare
        $queryClient->bindValue(':token_token', $token, PDO::PARAM_STR); //indique que la valeur est de type chaîne 

        $queryClient->bindValue(':user_id', $userId, PDO::PARAM_STR);


        $queryClient->execute();
    }


    public function addChangePassword($password, $token)
    {

        $database = $this->connectDatabase();
        $myQuery = 'UPDATE `mila_user`
        INNER JOIN mila_token ON mila_user.user_id = mila_token.user_id SET user_password = :user_password WHERE token_token = :token_token ';
        $queryClient = $database->prepare($myQuery); // query si on n'a pas de paramétres par rapport prepare
        $queryClient->bindValue(':user_password', $password, PDO::PARAM_STR); //indique que la valeur est de type chaîne 
        $queryClient->bindValue(':token_token', $token, PDO::PARAM_STR); //indique que la valeur est de type chaîne
        $queryClient->execute();
    }


    public function getChangeProfile($lastname, $firstname, $pseudo, $mail, $id)
    {

        $database = $this->connectDatabase();
        $myQuery = ('UPDATE mila_user SET user_lastname = :lastname,  user_firstname = :firstname, user_pseudo= :pseudo, user_mail = :mail WHERE user_id = :id');
        $queryClient = $database->prepare($myQuery);

        $queryClient->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $queryClient->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $queryClient->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $queryClient->bindValue(':mail', $mail, PDO::PARAM_STR);
        $queryClient->bindValue(':id', $id, PDO::PARAM_STR);

        $queryClient->execute();
    }




    public function deleteUser($id)
    {

        $database = $this->connectDatabase();
        $myQuery = 'DELETE FROM `mila_user` WHERE user_id =:id';
        $queryClient = $database->prepare($myQuery);
        $queryClient->bindValue(':id', $id, PDO::PARAM_INT);
        $queryClient->execute();
    }




    public function ChangeMail($mail, $id)
    {
        $database = $this->connectDatabase();
        $myQuery = ('UPDATE mila_user SET user_mail = :mail WHERE user_id = :id');
        $queryClient = $database->prepare($myQuery);

        $queryClient->bindValue(':mail', $mail, PDO::PARAM_STR);
        $queryClient->bindValue(':id', $id, PDO::PARAM_STR);

        $queryClient->execute();
    }


    public function ChangePassword($newPassword, $id)
    {

        $database = $this->connectDatabase();
        $myQuery = ('UPDATE mila_user SET user_password = :passwordNew WHERE user_id = :id');
        $queryClient = $database->prepare($myQuery);

        $queryClient->bindValue(':passwordNew', $newPassword, PDO::PARAM_STR);
        $queryClient->bindValue(':id', $id, PDO::PARAM_STR);

        $queryClient->execute();
    }


    public function addAdminUser($mail)
    {

        $database = $this->connectDatabase();
        $myQuery = ('SELECT * FROM mila_user WHERE user_pseudo = "helloWorld"');
        $queryClient = $database->prepare($myQuery);

        $queryClient->bindValue("helloWorld", $mail, PDO::PARAM_STR);

        $fetch = $queryClient->fetch();
        return $fetch;
    }



    public function checkPassword($id)
    {
        $database = $this->connectDatabase();
        $myQuery = 'SELECT * FROM `mila_user` WHERE user_id = :id';
        $queryClient = $database->prepare($myQuery);
        $queryClient->bindValue(':id', $id, PDO::PARAM_STR);
        $queryClient->execute();
        $fetch = $queryClient->fetch();
        return $fetch;
    }




    public function addCommentUser($comment, $id, $idMovie, $date)
    {


        $database = $this->connectDatabase();
        $myQuery = 'INSERT INTO `mila_comments` (`comments_comment`, `user_id`, `critics_id`, `comments_date_ajout`) VALUES (:comments_comment, :id, :critics_id, :comments_date_ajout )';
        $queryClient = $database->prepare($myQuery);
        $queryClient->bindValue(':comments_comment', $comment, PDO::PARAM_STR);
        $queryClient->bindValue(':id', $id, PDO::PARAM_STR);
        $queryClient->bindValue(':critics_id', $idMovie, PDO::PARAM_STR);
        $queryClient->bindValue(':comments_date_ajout', $date, PDO::PARAM_STR);


        $queryClient->execute();
    }



    public function addFilmDetails($imdbId, $poster, $title, $release, $cast, $critic, $genre, $imdbRating, $runtime, $director, $plot)
    {
        $database = $this->connectDatabase();
        $myQuery = 'INSERT INTO `mila_critics` (`critics_imdb_id`, `critics_poster`, `critics_film_title`, `critics_release`, `critics_cast`, `critics_text`, `critics_genre`, `critics_imdbRating`, `critics_runtime`, `critics_director`, `critics_plot`)
        VALUES (:critics_imdb_id, :critics_poster, :critics_film_title, :critics_release, :critics_cast, :critics_text, :critics_genre, :critics_imdbRating, :critics_runtime, :critics_director, :critics_plot)';
        $queryClient = $database->prepare($myQuery);

        $queryClient->bindValue(':critics_imdb_id', $imdbId, PDO::PARAM_STR);
        $queryClient->bindValue(':critics_poster', $poster, PDO::PARAM_STR);
        $queryClient->bindValue(':critics_film_title', $title, PDO::PARAM_STR);
        $queryClient->bindValue(':critics_release', $release, PDO::PARAM_STR);
        $queryClient->bindValue(':critics_cast', $cast, PDO::PARAM_STR);
        $queryClient->bindValue(':critics_text', $critic, PDO::PARAM_STR);
        $queryClient->bindValue(':critics_genre', $genre, PDO::PARAM_STR);
        $queryClient->bindValue(':critics_imdbRating', $imdbRating, PDO::PARAM_STR);
        $queryClient->bindValue(':critics_runtime', $runtime, PDO::PARAM_STR);
        $queryClient->bindValue(':critics_director', $director, PDO::PARAM_STR);
        $queryClient->bindValue(':critics_plot', $plot, PDO::PARAM_STR);

        $queryClient->execute();
    }

    public function afficheCritics($imdbId)
    {
        $database = $this->connectDatabase();
        $myQuery = 'SELECT * FROM `mila_critics` WHERE critics_imdb_id = :id';
        $queryClient = $database->prepare($myQuery);
        $queryClient->bindValue(':id', $imdbId, PDO::PARAM_STR);
        $queryClient->execute();
        $fetch = $queryClient->fetch();
        return $fetch;
    }

    public function afficheAllCritics()
    {
        $database = $this->connectDatabase();
        $myQuery = 'SELECT * FROM `mila_critics`';
        $queryClient = $database->query($myQuery);
        $fetch = $queryClient->fetchAll();
        return $fetch;
    }

    public function afficheOneCritic($id)
    {
        $database = $this->connectDatabase();
        $myQuery = 'SELECT * FROM `mila_critics` WHERE critics_id = :id';
        $queryClient = $database->prepare($myQuery);
        $queryClient->bindValue(':id', $id, PDO::PARAM_STR);
        $queryClient->execute();
        $fetch = $queryClient->fetch();
        return $fetch;
    }

    public function ChangeCritic($criticText, $id)
    {

        $database = $this->connectDatabase();
        $myQuery = ('UPDATE mila_critics SET critics_text = :critics_text WHERE critics_id = :id');
        $queryClient = $database->prepare($myQuery);

        $queryClient->bindValue(':critics_text', $criticText, PDO::PARAM_STR);
        $queryClient->bindValue(':id', $id, PDO::PARAM_STR);

        $queryClient->execute();
    }


    public function addSearch($searchInput)
    {

        $database = $this->connectDatabase();
        $myQuery = 'SELECT * FROM `mila_critics` WHERE critics_film_title LIKE "%' . $searchInput . '%" ';
        $queryClient = $database->prepare($myQuery);
        $queryClient->execute();
        $fetch = $queryClient->fetchAll();
        return $fetch;
    }

    public function checkComment($id, $idMovie)
    {
        $database = $this->connectDatabase();
        $myQuery = 'SELECT * FROM `mila_comments` WHERE user_id = :existComment AND critics_id = :critic_id';
        $queryClient = $database->prepare($myQuery);
        $queryClient->bindValue(':existComment', $id, PDO::PARAM_STR);
        $queryClient->bindValue(':critic_id', $idMovie, PDO::PARAM_STR);

        $queryClient->execute();
        $fetch = $queryClient->fetchAll();
        return $fetch;
    }


    public function afficheAllComments($idMovie)
    {
        $database = $this->connectDatabase();
        $myQuery = 'SELECT comments_id, comments_comment, mila_comments.user_id, critics_id, comments_date_ajout, user_pseudo
        FROM `mila_comments` 
        INNER JOIN mila_user
        ON mila_user.user_id = mila_comments.user_id     
        WHERE critics_id = :critic_id';
        $queryClient = $database->prepare($myQuery);

        $queryClient->bindValue(':critic_id', $idMovie, PDO::PARAM_STR);

        $queryClient->execute();

        $fetch = $queryClient->fetchAll();
        return $fetch;
    }



    
    public function deletePersonalView($idMovie, $personalView)
    {

        $database = $this->connectDatabase();
        $myQuery = 'UPDATE `mila_critics`SET critics_text = :critics_text WHERE critics_id = :critics_id';
        $queryClient = $database->prepare($myQuery);

        $queryClient->bindValue(':critics_id', $idMovie, PDO::PARAM_STR);
        $queryClient->bindValue(':critics_text', $personalView, PDO::PARAM_STR);

        $queryClient->execute();
    }



    public function ChangeUserView($coment, $commentId)
    {

        $database = $this->connectDatabase();
        $myQuery = ('UPDATE mila_comments SET comments_comment = :comments_comment WHERE comments_id = :comments_id');
        $queryClient = $database->prepare($myQuery);

        $queryClient->bindValue(':comments_comment', $coment, PDO::PARAM_STR);
        $queryClient->bindValue(':comments_id', $commentId, PDO::PARAM_STR);

        $queryClient->execute();
    }


    public function deleteUserView($idComment)
    {

        $database = $this->connectDatabase();
        $myQuery = 'DELETE FROM `mila_comments` WHERE comments_id = :comments_id';
        $queryClient = $database->prepare($myQuery);

        $queryClient->bindValue(':comments_id', $idComment, PDO::PARAM_STR);

        $queryClient->execute();
    }


    public function afficheMilaComment($userId)
    {

        $database = $this->connectDatabase();
        $myQuery = 'SELECT comments_id, comments_comment, comments_date_ajout, mila_critics.critics_poster, mila_comments.user_id, mila_critics.critics_film_title, mila_critics.critics_id
        FROM `mila_comments` 
        INNER JOIN mila_critics
        ON mila_critics.critics_id = mila_comments.critics_id
        WHERE mila_comments.user_id = :userId'; 
        
        $queryClient = $database->prepare($myQuery);

        $queryClient->bindValue(':userId', $userId, PDO::PARAM_STR);

        $queryClient->execute();

        $fetch = $queryClient->fetchAll();
        return $fetch;
    }


    // public function afficheMilaComment()
    // {

    //     $database = $this->connectDatabase();
    //     $myQuery = 'SELECT * FROM mila_comments';
    
    //     $queryClient = $database->query($myQuery);

    //     $fetch = $queryClient->fetchAll();
    //     return $fetch;
    // }


}

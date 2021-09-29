-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 29 sep. 2021 à 09:16
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_pro`
--

-- --------------------------------------------------------

--
-- Structure de la table `mila_comments`
--

DROP TABLE IF EXISTS `mila_comments`;
CREATE TABLE IF NOT EXISTS `mila_comments` (
  `comments_id` int(11) NOT NULL AUTO_INCREMENT,
  `comments_comment` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `critics_id` int(11) NOT NULL,
  `comments_date_ajout` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`comments_id`),
  KEY `Critic Fk Id` (`critics_id`),
  KEY `mila_comments_mila_user_FK` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mila_comments`
--

INSERT INTO `mila_comments` (`comments_id`, `comments_comment`, `user_id`, `critics_id`, `comments_date_ajout`) VALUES
(77, ',d;df', 32, 65, '09/20/2021'),
(78, ',;', 32, 66, '09/20/2021'),
(85, 'good', 34, 66, '09/20/2021'),
(92, 'good film', 36, 64, '09/21/2021'),
(93, 'dqsdsq', 36, 75, '09/21/2021'),
(94, 'bhgifjdokgj', 36, 74, '09/21/2021'),
(98, 'shit happends', 43, 64, '09/23/2021'),
(99, 'good', 36, 65, '09/28/2021');

-- --------------------------------------------------------

--
-- Structure de la table `mila_critics`
--

DROP TABLE IF EXISTS `mila_critics`;
CREATE TABLE IF NOT EXISTS `mila_critics` (
  `critics_id` int(11) NOT NULL AUTO_INCREMENT,
  `critics_imdb_id` varchar(50) NOT NULL,
  `critics_poster` varchar(255) NOT NULL,
  `critics_film_title` varchar(50) NOT NULL,
  `critics_release` varchar(50) NOT NULL,
  `critics_cast` text NOT NULL,
  `critics_text` longtext NOT NULL,
  `critics_genre` varchar(50) DEFAULT NULL,
  `critics_imdbRating` varchar(50) DEFAULT NULL,
  `critics_runtime` varchar(50) DEFAULT NULL,
  `critics_director` varchar(50) DEFAULT NULL,
  `critics_plot` text,
  PRIMARY KEY (`critics_id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mila_critics`
--

INSERT INTO `mila_critics` (`critics_id`, `critics_imdb_id`, `critics_poster`, `critics_film_title`, `critics_release`, `critics_cast`, `critics_text`, `critics_genre`, `critics_imdbRating`, `critics_runtime`, `critics_director`, `critics_plot`) VALUES
(64, 'tt0103064', 'https://m.media-amazon.com/images/M/MV5BMGU2NzRmZjUtOGUxYS00ZjdjLWEwZWItY2NlM2JhNjkxNTFmXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SX300.jpg', 'Terminator 2: Judgment Day', '1991', 'Arnold Schwarzenegger, Linda Hamilton, Edward Furlong', 'À venir', NULL, NULL, NULL, NULL, NULL),
(65, 'tt1192169', 'https://m.media-amazon.com/images/M/MV5BYmQwYTc1ZDEtMzU3My00OTIzLWE1YmEtYmUyMmMzZTI2ZWNlXkEyXkFqcGdeQXVyOTgwMzk1MTA@._V1_SX300.jpg', 'Ben 10: Alien Force', '2008–2010', 'Yuri Lowenthal, Dee Bradley Baker, Ashley Johnson', 'À venir', NULL, NULL, NULL, NULL, NULL),
(66, 'tt1340138', 'https://m.media-amazon.com/images/M/MV5BMjM1NTc0NzE4OF5BMl5BanBnXkFtZTgwNDkyNjQ1NTE@._V1_SX300.jpg', 'Terminator Genisys', '2015', 'Arnold Schwarzenegger, Jason Clarke, Emilia Clarke', '    Super film de la mort\r\n    ', NULL, NULL, NULL, NULL, NULL),
(67, 'tt0851851', 'https://m.media-amazon.com/images/M/MV5BZGE2ZDgyOWUtNzdiNS00OTI3LTkwZGQtMTMwNzM4YWUxNGNhXkEyXkFqcGdeQXVyNjU2NjA5NjM@._V1_SX300.jpg', 'Terminator: The Sarah Connor Chronicles', '2008–2009', 'Lena Headey, Thomas Dekker, Summer Glau', '    \r\n    rez', NULL, NULL, NULL, NULL, NULL),
(68, 'tt0364056', 'https://m.media-amazon.com/images/M/MV5BMjA5OTk4MTQwNV5BMl5BanBnXkFtZTgwMzkxNTEwMTE@._V1_SX300.jpg', 'Terminator 3: Rise of the Machines', '2003', 'Arnold Schwarzenegger, Poppi Monroe, Claire Danes, Nick Stahl', '\r\n    dsq', NULL, NULL, NULL, NULL, NULL),
(69, 'tt5460522', 'https://m.media-amazon.com/images/M/MV5BMjIyNzkxNDQ0MV5BMl5BanBnXkFtZTgwNDAwNzQ3NzM@._V1_SX300.jpg', 'Jeremiah Terminator LeRoy', '2018', 'Kristen Stewart, Laura Dern, Jim Sturgess', 'dqdsq\r\n    ', NULL, NULL, NULL, NULL, NULL),
(70, 'tt0438488', 'https://m.media-amazon.com/images/M/MV5BODBlOTJhZjItMGRmYS00YzM1LWFmZTktOTJmNDMyZTBjMjBkXkEyXkFqcGdeQXVyMjMwNDgzNjc@._V1_SX300.jpg', 'Terminator Salvation', '2009', 'Christian Bale, Sam Worthington, Anton Yelchin', 'dsqdsq\r\n    ', NULL, NULL, NULL, NULL, NULL),
(71, 'tt0144814', 'https://m.media-amazon.com/images/M/MV5BMTMwNzMwNjUyNV5BMl5BanBnXkFtZTcwMzk3MTE3NA@@._V1_SX300.jpg', 'The Rage: Carrie 2', '1999', 'Emily Bergl, Jason London, Dylan Bruno', 'ffdsklfm\r\n    ', NULL, NULL, NULL, NULL, NULL),
(72, 'tt5688868', 'https://m.media-amazon.com/images/M/MV5BNjc5MjUyZTctNGQ1YS00ZTkyLWJmMDktZWNjNjcyNjU3MjU0XkEyXkFqcGdeQXVyNzc0MTgzMzU@._V1_SX300.jpg', 'Primal Rage', '2018', 'Casey Gagliardi, Andrew Joseph Montgomery, Jameson Pazak', '\r\n    dsqlkjdkl', NULL, NULL, NULL, NULL, NULL),
(73, 'tt0337898', 'https://m.media-amazon.com/images/M/MV5BNDRjMDY1N2MtMGY2NC00ODJmLTlhOWMtZDc2MmY3ZDQzYTMzXkEyXkFqcGdeQXVyNDM1ODc2NzE@._V1_SX300.jpg', 'Brigada', '2002', 'Sergey Bezrukov, Dmitriy Dyuzhev, Pavel Maykov', 'fjfkdsljkl\r\n    ', 'Action, Crime, Drama', '8.3', '52 min', 'N/A', 'Brigada is a group of four friends, who grew up together and formed a most powerful gang in Moscow. Initially they made business together, but an unplanned murder transformed them into a gang. Now their lives are at risk and there is'),
(74, 'tt0903624', 'https://m.media-amazon.com/images/M/MV5BMTcwNTE4MTUxMl5BMl5BanBnXkFtZTcwMDIyODM4OA@@._V1_SX300.jpg', 'The Hobbit: An Unexpected Journey', '2012', 'Martin Freeman, Ian McKellen, Richard Armitage', 'film trés simpa\r\n    ', 'Adventure, Fantasy', '7.8', '169 min', 'Peter Jackson', 'A reluctant Hobbit, Bilbo Baggins, sets out to the Lonely Mountain with a spirited group of dwarves to reclaim their mountain home, and the gold within it from the dragon Smaug.'),
(75, 'tt1392190', 'https://m.media-amazon.com/images/M/MV5BN2EwM2I5OWMtMGQyMi00Zjg1LWJkNTctZTdjYTA4OGUwZjMyXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg', 'Mad Max: Fury Road', '2015', 'Tom Hardy, Charlize Theron, Nicholas Hoult', 'nicedqsdsq', 'Action, Adventure, Sci-Fi', '8.1', '120 min', 'George Miller', 'In a post-apocalyptic wasteland, a woman rebels against a tyrannical ruler in search for her homeland with the aid of a group of female prisoners, a psychotic worshiper, and a drifter named Max.'),
(76, 'tt9454892', 'https://m.media-amazon.com/images/M/MV5BNTFiOTkyNjktZGM1Zi00MDhhLThhYjAtODUwNDVhYzJjOTEwXkEyXkFqcGdeQXVyMTE0Nzg1NjQ2._V1_SX300.jpg', 'Hello Mini', '2019–', 'Anuja Joshi, Mrinal Dutt, Anshul Pandey', 'dkqslkdmlsq', 'Thriller', '8.9', '25 min', 'N/A', 'A thriller drama series, revolving around Rivanah Bannerjee, an independent girl, living alone in Mumbai. She has the perfect life: doting parents, a loving boyfriend, and a great job. But things are seldom what they seem, as her lif'),
(77, 'tt14260080', 'https://m.media-amazon.com/images/M/MV5BNmNjODA5MjgtZDkyMy00ZmExLTk5N2QtYzIzMzNlNGIyZjZiXkEyXkFqcGdeQXVyMTI1NDAzMzM0._V1_SX300.jpg', 'Hello Charlie', '2021', 'Aadar Jain, Jackie Shroff, Shloka Pandit', '\r\n    dkslqmk', 'Comedy', '5.5', '102 min', 'Pankaj Saraswat', 'Charlie a young pizza delivery boy, who has been assigned the task to transport a gorilla from Mumbai to Diu. The adventures the unlikely duo get embroiled in along the way forms the crux of the plot.'),
(78, 'tt8690918', 'https://m.media-amazon.com/images/M/MV5BYTFkNDFhZGEtZjA2Ni00M2Q4LWFlMWEtZGFhMmM0MWJkNDQ0XkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_SX300.jpg', 'Resident Alien', '2021–', 'Alan Tudyk, Sara Tomko, Corey Reynolds', '\r\n    kfldslmfksmdl', 'Comedy, Drama, Mystery', '8.2', '44 min', 'N/A', 'A crash-landed alien named Harry who takes on the identity of a small-town Colorado doctor and slowly begins to wrestle with the moral dilemma of his secret mission on Earth.'),
(79, 'tt0118583', 'https://m.media-amazon.com/images/M/MV5BNDljNGZkNmItNDlmMi00YzJhLWJiYWUtNGY4OGEwNmY0ODg4XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_SX300.jpg', 'Alien: Resurrection', '1997', 'Sigourney Weaver, Winona Ryder, Dominique Pinon', 'bad film', 'Action, Horror, Sci-Fi', '6.2', '109 min', 'Jean-Pierre Jeunet', '200 years after her death, Ellen Ripley is revived as a powerful human/alien hybrid clone. Along with a crew of space pirates, she must again battle the deadly aliens and stop them from reaching Earth.'),
(80, 'tt0088247', 'https://m.media-amazon.com/images/M/MV5BYTViNzMxZjEtZGEwNy00MDNiLWIzNGQtZDY2MjQ1OWViZjFmXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX300.jpg', 'The Terminator', '1984', 'Arnold Schwarzenegger, Linda Hamilton, Michael Biehn', '\r\n    fds', 'Action, Sci-Fi', '8.0', '107 min', 'James Cameron', 'A human soldier is sent from 2029 to 1984 to stop an almost indestructible cyborg killing machine, sent from the same year, which has been programmed to execute a young woman whose unborn son is the key to humanity\'s future salvation'),
(81, 'tt6450804', 'https://m.media-amazon.com/images/M/MV5BOWExYzVlZDgtY2E1ZS00NTFjLWFmZWItZjI2NWY5ZWJiNTE4XkEyXkFqcGdeQXVyMTA3MTA4Mzgw._V1_SX300.jpg', 'Terminator: Dark Fate', '2019', 'Linda Hamilton, Arnold Schwarzenegger, Mackenzie Davis', '\r\n    QSDQSF', 'Action, Adventure, Sci-Fi', '6.2', '128 min', 'Tim Miller', 'An augmented human and Sarah Connor must stop an advanced liquid Terminator from hunting down a young girl, whose fate is critical to the human race.'),
(82, 'tt0084684', 'https://m.media-amazon.com/images/M/MV5BMzk5NWYwNGUtYWJmZC00NDc2LTk0YzQtZWFmN2Q5MDQ2ZGFjL2ltYWdlXkEyXkFqcGdeQXVyNzc5MjA3OA@@._V1_SX300.jpg', 'Silent Rage', '1982', 'Chuck Norris, Ron Silver, Steven Keats', 'my new commentaire', 'Action, Crime, Horror', '5.5', '103 min', 'Michael Miller', 'A sheriff tries to stop the killing spree of a silent maniacal murderer who, as the result of secret genetic experimentation by an unethical scientist, has the ability to self-heal.');

-- --------------------------------------------------------

--
-- Structure de la table `mila_token`
--

DROP TABLE IF EXISTS `mila_token`;
CREATE TABLE IF NOT EXISTS `mila_token` (
  `token_id` int(11) NOT NULL AUTO_INCREMENT,
  `token_token` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`token_id`),
  UNIQUE KEY `mila_token_mila_user_AK` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mila_token`
--

INSERT INTO `mila_token` (`token_id`, `token_token`, `user_id`) VALUES
(1, '90659298', 1),
(13, 'f980d78f', 2),
(15, 'b30b4eed', 3);

-- --------------------------------------------------------

--
-- Structure de la table `mila_user`
--

DROP TABLE IF EXISTS `mila_user`;
CREATE TABLE IF NOT EXISTS `mila_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_lastname` varchar(255) DEFAULT NULL,
  `user_firstname` varchar(255) DEFAULT NULL,
  `user_pseudo` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mila_user`
--

INSERT INTO `mila_user` (`user_id`, `user_lastname`, `user_firstname`, `user_pseudo`, `user_mail`, `user_password`, `user_admin`) VALUES
(1, '2sq', 'dsqdsss', 'hel', 'kunisforever@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$MHh3OEl5cUo5ZzU3MUxjRQ$moFKEywJY9TaGTw3PxrMoNVhyT3MgIaONsWk5xvKMQU', 0),
(2, 'dsq', 'dsqd', 'dqsdsq', 'kunisforever@gmail.com', '$2y$10$Fx9ncL8yLP64h18bVr9Mp.pkrvYu83SA0sLuYQ3Liypgivr4GLhm2', 0),
(3, 'dsq', 'dsqd', 'dqsdsq', 'kunisforever@gmail.com', '$2y$10$zUSXMdqMOvDYs.fuGFjVSeo4Di9hbSICUnS9NOgx4BfauxMZK2z8O', 0),
(4, 'dsq', 'dsqd', 'dqsdsq', 'kunisforever@gmail.com', '$2y$10$L609O6hhh4pjuhe9sp0Ag.3EateQzebK/evan9jsz6cCVKc881vbC', 0),
(5, 'dsq', 'dsqd', 'dqsdsq', 'kunisforever@gmail.com', '$2y$10$w/h.wL6xFBteqN4M1fDT5eBo6RHJUDmOwQyilbEHvaL.opGScWVe6', 0),
(12, '', '', 'Narek12', 'hek@gmail.com', '$2y$10$xd08ihuurcF5Dsc2A26WjeF/86Kh8LMIciXYeleBuL0pEkPfZM4T.', 0),
(13, NULL, NULL, 'Mila', 'milakunis@gmail.com', '$2y$10$2rt5aywZpjf9RAAHzvhX9OMRnHwaTQ4fYqPBPplX2lF4EmeiXCG.K', 0),
(17, NULL, NULL, 'superman', 'superman@superman.fr', '$2y$10$Xfu6Mx1rEUvEjcMXIroX1OL00jNBgDymfzXurdlC6izVIwO68ddkK', 0),
(18, 'Maillo', 'Jerome', 'JeromeBOSS', 'hello@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$RkFKNWZvQkRnME1SRTR3Lg$gFFL3tKwt/BqFS2It0MRUBQA5rPxfK/TLmJQcTjbMIA', 0),
(21, NULL, NULL, 'narek', 'narek@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$VmhTazhZUzZCeWxiU3ZJbQ$ndD4mcd/QTgNIff5OqLfFd0uPux2SZ79Vri0ot9Uvdw', 0),
(22, NULL, NULL, 'narek312', 'dsqdqs@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$ekNSZU5wVVVJbThjQi9xNw$56sFcMjqGZNwoWBd6J4oHUPuXR58CzmtGp/QitNVNXI', 0),
(23, NULL, NULL, 'narek789', 'strange@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$eTRmLzIyUXVWallldFgyQQ$vtYAVdPkktMGCWLddXDdhzHpcqYLGjctsCqt5+4VLF4', 0),
(24, NULL, NULL, 'narek456', 'narek456@gmail.com', '123', 0),
(25, NULL, NULL, 'narek741', 'ekza@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$azZEWDZVZXM1eTF4dzdFVg$g7hyd/D7BLUsRTR7fLbMzBovR7Xh1CLqGzxbI2i7hes', 0),
(26, '', '', 'nar', 'dsqdqsdqs@gmail.com', '$2y$10$Vv5NB.yue3q.GiA1vbL5PObk9dDPFgkWxBqkHyKw4hfM1AUk.mvhK', 0),
(27, NULL, NULL, 'fdsjk', 'dhjqhskjqs@gmail.com', '$2y$10$dvYECn8YV5cJn1kgQWfNkOwV.SInzVkIGUP0VpKhFqtRJgYciZ8Gm', 0),
(28, NULL, NULL, 'dqsdqs', 'ddsqdqsdqs@gmail.com', '$2y$10$d4Svk9SQUM1jZk5Y51Pif..w7Tzi8pfWwwDlZ4nMi4iMHHygXj9zG', 0),
(29, NULL, NULL, 'dsqdsq', 'dsqdsqd@gmail.com', '$2y$10$OEnu9CwIKOAqv5PnhWsk/ekyb0IAP9Evxxz6x2C9zasKEJRRmPFZi', 0),
(30, '', '', 'milo', 'milo@milo.com', '$argon2id$v=19$m=65536,t=4,p=1$czJmMDYuM2hUTGVCa05GWg$ZndhqxrdHMSxVHPJbTzIVtpDvXfrVbCxQ1zjREd9HlQ', 0),
(32, NULL, NULL, 'narekll', 'narekll@gmail.com', '$2y$10$dtUOF5b0R1DoMWfj7xk9TOPSTRXI7L2yqMHtjnzcAUCFfutqYIwzC', 0),
(33, NULL, NULL, 'newpersonne', 'personne@gmail.com', '$2y$10$6vk6lYDbvJ11ww/MLgR9ZOzm5H41xokoy7dyO1symVHBX.D.cHSZq', 0),
(34, NULL, NULL, 'kaka', 'kaka@gmail.com', '$2y$10$mg2STo.Q9knozFDWs1gq2u6BKQhSVbfoitSrThxPclzr2EI27sReO', 0),
(36, NULL, NULL, 'helloWorld', 'helloworld@gmail.com', '$2y$10$4p5Jj9hMxxQSa4//37oQa.ybgNBjf8F/vbmDtSJqRE/8lxxE3ayxq', 1),
(43, NULL, NULL, 'totoro', 'totoro@gmail.com', '$2y$10$2cxzlJ4dkUYFaCYOdvjYrOm/e0pSmDhEfEtSa63XwqB8MBgpkVID2', 0),
(44, NULL, NULL, 'nareks', 'nareks@gmail.com', '$2y$10$VEp/h8zr4IGFl7W/hV55LenfEmIXtiy7MlByoQKYJY.kO55xtcNLO', 0),
(45, NULL, NULL, 'naréks31', 'vanyanssddnarek0@gmail.com', '$2y$10$dXA1Teq8vfnXV2P7mUe8heBc/EV5Qeu5vBxNa1HjIghPBOIDLw8tu', 0),
(46, NULL, NULL, 'naréks856', 'vanyannarek52@gmail.com', '$2y$10$Xy9h1EBuQ/.UJ4umOs5sdeM6Q30P6h3wSYJEVyiGeC.KyCXpFtdEe', 0),
(47, NULL, NULL, '&narek', 'nareksss@gmail.com', '$2y$10$/vY5YAlZEmwrVz41NAZThuwpJ7A/E8y5FMMVpXfbizCFWJ5ZB0Fg2', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `mila_comments`
--
ALTER TABLE `mila_comments`
  ADD CONSTRAINT `Critic Fk Id` FOREIGN KEY (`critics_id`) REFERENCES `mila_critics` (`critics_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mila_comments_mila_user_FK` FOREIGN KEY (`user_id`) REFERENCES `mila_user` (`user_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `mila_token`
--
ALTER TABLE `mila_token`
  ADD CONSTRAINT `mila_token_mila_user_FK` FOREIGN KEY (`user_id`) REFERENCES `mila_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

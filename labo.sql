-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 14 oct. 2020 à 20:24
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `labo`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mot_passe` varchar(30) NOT NULL,
  `val` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `mot_passe`, `val`) VALUES
(1, 'omarsen6@gmail.com', '123456', 2),
(2, 'omarsenoussaoui5@gmail.com', '1234567', 0),
(7, 'omaromar5@yahoo.fr', '123456', 0);

-- --------------------------------------------------------

--
-- Structure de la table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_title` varchar(250) NOT NULL,
  `detail` text NOT NULL,
  `banner_image` varchar(250) NOT NULL,
  `val` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_title`, `detail`, `banner_image`, `val`) VALUES
(1, 'oooo', '12/01/2020', 'clinic_01.jpg', 0),
(3, 'etudiant', '', '56-512.png', 1),
(4, 'Banner 2', 'السلام عليكم ورحمة الله\r\n', 'about_03.jpg', 0),
(5, 'annc3', '12/15/55', 'incendie-laboratoire-russe-ebola-variole-vektor.jpg', 0),
(6, 'omar', '', 'clinic_02.jpg', 1),
(7, 'Banner 2', '', 'bg-registration-form-7.jpg', 1),
(8, 'info', 'salut msr bou', 'bg-registration-form-7.jpg', 1),
(9, 'Banner 1', '', 'kisspng-blood-sugar-diabetes-mellitus-blood-test-handle-blood-tests-5a84d735299e79.6308876915186552851705.png', 1),
(10, 'Banner 3', '', '61U7T1koQqL._AC_SX466_.jpg', 1),
(11, 'Banner 3', '', '61U7T1koQqL._AC_SX466_.jpg', 1),
(12, 'ljklk', 'hlkhkl', 'clinic_03.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_msg` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `sujet` varchar(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_msg`, `nom`, `email`, `sujet`, `message`) VALUES
(1, 'ouldaouali', 'ououldld@yahooo.fr', 'analyse', '32131313132132131321313131321321313213131313213213132131313132132131321313131321321313213131313213uhjuihkhjkhjlkjlkjljlkjjkljllllllllllllllllllllllllllllllllllljjjjjjjjjpoooooooooooooooooooo2131'),
(2, 'omar senoussaoui', 'omarsen6@gmail.com', 'analyse ', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk'),
(3, 'omar senoussaoui', '0793751377', 'klnkln', 'dsfqdsdsfqdsdsfqdsdsfqdsdsfqds'),
(5, 'djilali', 'djilaliaek@gmail.com', 'analyse ', 'khkhljlmkm;m:ù'),
(6, 'kbkj', 'hih', 'ihih', 'uygfyujguygfyujguygfyujg'),
(7, 'mohamed', 'mohamed.1500@gmail.com', 'les résult', 'السلام عليكم');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `id_patient` int(30) NOT NULL,
  `nom_patient` varchar(30) NOT NULL,
  `prenom_patient` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mot_passePa` varchar(30) NOT NULL,
  `num_tlp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id_patient`, `nom_patient`, `prenom_patient`, `email`, `mot_passePa`, `num_tlp`) VALUES
(1, 'omar', 'senoussaoui', 'omarsenoussaoui666@gmail.com', '123456', '0793751377'),
(2, 'Omar', 'Senoussaoui', 'omarsen6@gmail.com', '123456', '0793751377'),
(3, 'ouldaouli aek', 'djilali', 'djilali.1500@hotmail.com', '111', '0793751377'),
(4, 'omar', 'ouldaouali', 'omarsenoussaoui56@gmail.com', '111', '0793751377'),
(5, 'omar', 'khaled', 'omarsenoussaoui5@gmail.com', '111', '0793751377'),
(7, 'omar', 'djellol', 'omarsen6ww@gmail.com', '123', '0793751377'),
(8, 'omar', 'ouldaouali', 'omarsenoul@gmail.com', '222', '0793751377');

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `id_rdv` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `type_analyse` varchar(30) NOT NULL,
  `ord` varchar(250) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `accept` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rdv`
--

INSERT INTO `rdv` (`id_rdv`, `date`, `time`, `type_analyse`, `ord`, `id_patient`, `accept`) VALUES
(13, '2020-09-15', '20:25:00', 'bio\n                ', 'back.png', 2, 0),
(14, '2020-11-18', '20:25:00', 'biochi', 'back.png', 2, 0),
(15, '2020-09-15', '15:00:00', 'seratologie', 'back.png', 3, 0),
(16, '2020-09-16', '11:21:40', '', 'back.png', 1, 0),
(20, '2020-10-11', '16:51:00', '', 'fevicon.ico.png', 2, 1),
(21, '2020-10-11', '17:56:00', '', 'doctor_02.jpg', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE `test` (
  `id_test` int(11) NOT NULL,
  `type_analyse` varchar(30) NOT NULL,
  `nom_test` varchar(30) NOT NULL,
  `technique` varchar(30) NOT NULL,
  `delai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id_test`, `type_analyse`, `nom_test`, `technique`, `delai`) VALUES
(1, 'Hématologie', 'FNS complète a 21 paramètre', 'Principe Culter', '15min-24h'),
(2, 'Hématologie', 'Taux de réticulocytes ', 'Technique Manuelle', '1h-24h '),
(3, 'Hématologie', 'Frottis sanguin périphérique', 'Technique Manuelle', '2h-24h'),
(4, 'Hématologie', 'Myélogramme', 'technique manuelle ', '3-5jours'),
(5, 'Hématologie', 'Temps de saignement ', 'Méthode d\'ivy', '30min-24h'),
(6, 'Hématologie', 'Taux de prothrombine ', 'Test chronométrique ', '15min-24h'),
(7, 'Hématologie', 'TCK', 'Test chronométrique ', '15min-24h'),
(8, 'Hématologie', 'fibrinogène', 'Test chronométrique ', '15min-24h'),
(9, 'Hématologie', 'D-Dimères', 'turbidimètre', '4-24h'),
(10, 'Hématologie', 'Groupage sanguin', 'Hemagglutination ', '15min-24h');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_msg`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id_patient`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`id_rdv`),
  ADD KEY `id_patient` (`id_patient`);

--
-- Index pour la table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id_patient` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `id_rdv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `rdv_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id_patient`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

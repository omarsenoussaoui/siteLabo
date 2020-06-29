-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 04 avr. 2020 à 20:21
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `labo`
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
(6, 'omarsen6@gmail.com', '1234567', 0),
(20, '0793751377@gmail.com', '1111111', 1),
(23, 'omarsenoussaoui5@gmail.com', '46641', 1),
(24, 'om5arsklllen6@gmail.com', '11111111', 1),
(25, 'salam3likom@yopmail.com', '23zz22', 0),
(26, 'omar666666666666666omaess@gmai', '121212', 1),
(27, 'omaromar12345@gmail.com', '123525202', 1),
(28, 'om5ars5555en6@gmail.com', '111111111111', 1),
(29, '0793kkkk751377@gmail.com', '11111111111111111111111', 1),
(30, 'omarsenoussaoui5004@yahoo.fr', 'omaromaromar.15000', 0);

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
(7, 'mohamed', 'mohamed.1500@gmail.com', 'les résult', 'السلام عليكم'),
(8, '', '', '', ''),
(9, 'mohamed', 'نمىنت', 'انزى', 'رناتوولاjhiommljùo'),
(10, '', '', '', '');

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
(1, 'omar', 'senoussaoui', 'omarsenoussaoui5@gmail.com', '123456', '0793751377'),
(2, 'amine', 'mohamed', 'omarsen6@gmail.com', '123456', '0793751366');

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `id_rdv` int(11) NOT NULL,
  `date` date NOT NULL,
  `type_analyse` varchar(30) NOT NULL,
  `ord` varchar(250) NOT NULL,
  `id_patient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rdv`
--

INSERT INTO `rdv` (`id_rdv`, `date`, `type_analyse`, `ord`, `id_patient`) VALUES
(1, '2020-04-15', 'hhhh', 'ssssss', 2),
(2, '2020-04-12', 'ml,ml,lm,', 'lknklnklnl', 2);

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
(1, 'Hématologie', 'FNS complète a 21 paramètre ', 'Principe Culter', '15min-24h'),
(2, 'Hématologie', 'Taux de réticulocytes ', 'Technique Manuelle', '1h-24h ');

-- --------------------------------------------------------

--
-- Structure de la table `test_rdv`
--

CREATE TABLE `test_rdv` (
  `id_test_rdv` int(11) NOT NULL,
  `id_rdv` int(11) NOT NULL,
  `id_test` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_msg`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id_patient`);

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
-- Index pour la table `test_rdv`
--
ALTER TABLE `test_rdv`
  ADD PRIMARY KEY (`id_test_rdv`),
  ADD KEY `id_rdv` (`id_rdv`),
  ADD KEY `id_test` (`id_test`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id_patient` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `id_rdv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `test_rdv`
--
ALTER TABLE `test_rdv`
  MODIFY `id_test_rdv` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `rdv_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id_patient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `test_rdv`
--
ALTER TABLE `test_rdv`
  ADD CONSTRAINT `test_rdv_ibfk_1` FOREIGN KEY (`id_rdv`) REFERENCES `rdv` (`id_rdv`),
  ADD CONSTRAINT `test_rdv_ibfk_2` FOREIGN KEY (`id_test`) REFERENCES `test` (`id_test`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

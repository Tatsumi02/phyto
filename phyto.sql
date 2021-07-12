-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 22 juin 2021 à 18:57
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
USE phyto;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `phyto`
--

-- --------------------------------------------------------

--
-- Structure de la table `effectuer1`
--

DROP TABLE IF EXISTS `effectuer1`;
CREATE TABLE IF NOT EXISTS `effectuer1` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_importation` bigint(20) NOT NULL,
  `id_importateur` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `effectuer1`
--

INSERT INTO `effectuer1` (`id`, `id_importation`, `id_importateur`) VALUES
(1, 4, 5),
(2, 5, 4),
(3, 5, 4),
(4, 7, 6);

-- --------------------------------------------------------

--
-- Structure de la table `effectuer2`
--

DROP TABLE IF EXISTS `effectuer2`;
CREATE TABLE IF NOT EXISTS `effectuer2` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_pays` bigint(20) NOT NULL,
  `id_exportateur` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `effectuer2`
--

INSERT INTO `effectuer2` (`id`, `id_pays`, `id_exportateur`) VALUES
(1, 3, 2),
(2, 2, 1),
(3, 1, 3),
(4, 7, 7),
(5, 5, 7),
(6, 7, 3);

-- --------------------------------------------------------

--
-- Structure de la table `exportateur`
--

DROP TABLE IF EXISTS `exportateur`;
CREATE TABLE IF NOT EXISTS `exportateur` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_exportateur` varchar(30) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `exportateur`
--

INSERT INTO `exportateur` (`id`, `nom_exportateur`, `telephone`) VALUES
(1, 'Kam', '699887755'),
(2, 'Ayissi', ''),
(3, 'Tamo', ''),
(4, 'Amadou', ''),
(5, 'camer', ''),
(6, 'komma', ''),
(7, 'sonna', ''),
(8, 'Renné', ''),
(9, 'Temi', '677543290'),
(10, 'Paul', '22345567');

-- --------------------------------------------------------

--
-- Structure de la table `exportation`
--

DROP TABLE IF EXISTS `exportation`;
CREATE TABLE IF NOT EXISTS `exportation` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `exportation`
--

INSERT INTO `exportation` (`id`, `date`, `type`) VALUES
(1, '2021-06-09', 'soute'),
(2, '2021-06-09', 'cargaison'),
(3, '2021-06-16', 'cargaison'),
(4, '2021-06-17', 'soute'),
(5, '2021-06-07', 'soute'),
(6, '2021-06-10', 'cargaison');

-- --------------------------------------------------------

--
-- Structure de la table `importateur`
--

DROP TABLE IF EXISTS `importateur`;
CREATE TABLE IF NOT EXISTS `importateur` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_importateur` varchar(30) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `importateur`
--

INSERT INTO `importateur` (`id`, `nom_importateur`, `telephone`) VALUES
(1, 'PHP', '675538779'),
(2, 'CDC', ''),
(3, 'G.M.R', ''),
(4, 'SEMAGRI', ''),
(5, 'ARYSTA Life', ''),
(6, 'FIMEX', '699775533'),
(7, 'Sadry sarl', ''),
(8, 'Les Flories', '699775554'),
(9, 'Olam cam Sa', ''),
(10, 'PASTA', ''),
(11, 'SABC', ''),
(12, 'SOTICAM', ''),
(13, 'OK FOODS', ''),
(14, 'NEW FOODS', ''),
(15, 'CICAM', '223345590'),
(16, 'S3C', ''),
(17, 'CSC', ''),
(18, 'Doual\'air', '');

-- --------------------------------------------------------

--
-- Structure de la table `importation`
--

DROP TABLE IF EXISTS `importation`;
CREATE TABLE IF NOT EXISTS `importation` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `importation`
--

INSERT INTO `importation` (`id`, `date`, `type`) VALUES
(1, '2021-06-01', 'soute'),
(2, '2021-06-03', 'cargaison'),
(3, '2021-05-03', 'cargaison'),
(4, '2021-06-10', 'cargaison'),
(5, '2021-04-11', '5'),
(6, '2021-06-11', 'cargaison'),
(7, '2021-06-23', 's');

-- --------------------------------------------------------

--
-- Structure de la table `ligne_exportation`
--

DROP TABLE IF EXISTS `ligne_exportation`;
CREATE TABLE IF NOT EXISTS `ligne_exportation` (
  `poids` double NOT NULL,
  `id_produits` bigint(20) NOT NULL,
  `id_exportation` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ligne_exportation`
--

INSERT INTO `ligne_exportation` (`poids`, `id_produits`, `id_exportation`) VALUES
(23, 2, 2),
(4, 2, 4),
(6, 4, 4),
(2, 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_importation`
--

DROP TABLE IF EXISTS `ligne_importation`;
CREATE TABLE IF NOT EXISTS `ligne_importation` (
  `poids` double NOT NULL,
  `id_speculation` bigint(20) NOT NULL,
  `id_importation` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ligne_importation`
--

INSERT INTO `ligne_importation` (`poids`, `id_speculation`, `id_importation`) VALUES
(4, 4, 4),
(6, 6, 6),
(76, 6, 3),
(9, 8, 2),
(9, 7, 3),
(6, 9, 7);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_pays` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `nom_pays`) VALUES
(1, 'cote d\'ivoire'),
(2, 'Malaisie'),
(3, 'Espagne'),
(4, 'France'),
(5, 'inde'),
(6, 'suisse'),
(7, 'Chine'),
(8, 'Kenya'),
(9, 'Allemagne'),
(10, 'Belgique'),
(11, 'Maroc'),
(12, 'Nigéria'),
(13, 'Italie'),
(14, 'Ethiopie');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_produits` varchar(30) NOT NULL,
  `id_speculation` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom_produits`, `id_speculation`) VALUES
(1, 'eru', 10),
(2, 'ndolé', 10),
(3, 'feuille de patates', 10),
(4, 'moreille noir', 10),
(5, 'folon', 10),
(6, 'tomate', 10),
(7, 'gombo', 10),
(8, 'piment', 10),
(9, 'Djansang', 11),
(10, 'poivre', 11),
(11, 'gingembre', 11);

-- --------------------------------------------------------

--
-- Structure de la table `provenir1`
--

DROP TABLE IF EXISTS `provenir1`;
CREATE TABLE IF NOT EXISTS `provenir1` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_importation` bigint(20) NOT NULL,
  `id_pays` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `provenir1`
--

INSERT INTO `provenir1` (`id`, `id_importation`, `id_pays`) VALUES
(1, 3, 3),
(2, 4, 2),
(3, 2, 3),
(4, 2, 3),
(5, 5, 8),
(6, 9, 9);

-- --------------------------------------------------------

--
-- Structure de la table `provenir2`
--

DROP TABLE IF EXISTS `provenir2`;
CREATE TABLE IF NOT EXISTS `provenir2` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_exportation` bigint(20) NOT NULL,
  `id_exportateur` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `provenir2`
--

INSERT INTO `provenir2` (`id`, `id_exportation`, `id_exportateur`) VALUES
(1, 3, 3),
(2, 4, 3),
(3, 3, 4),
(4, 5, 4),
(5, 2, 3),
(6, 2, 4),
(7, 4, 6),
(8, 3, 7);

-- --------------------------------------------------------

--
-- Structure de la table `speculation`
--

DROP TABLE IF EXISTS `speculation`;
CREATE TABLE IF NOT EXISTS `speculation` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_speculation` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `speculation`
--

INSERT INTO `speculation` (`id`, `nom_speculation`, `type`) VALUES
(1, 'enzymes', 'soute'),
(2, 'aromes', 'cargaison'),
(3, 'colorants', 'cargaison'),
(4, 'fleurs fraiches', 'cargaison'),
(5, 'sémences potageres', 'soute'),
(6, 'vins', 'soute'),
(7, 'jus', 'soute'),
(8, 'levure', 'soute'),
(9, 'appareils de traitement', 'cargaison'),
(10, 'semences mais', 'cargaison'),
(11, 'les légumes', 'soute'),
(12, 'les épices', 'cargaison');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

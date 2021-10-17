-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 15 sep. 2021 à 07:22
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `phyto`
--

-- --------------------------------------------------------

--
-- Structure de la table `exportations`
--

CREATE TABLE `exportations` (
  `id` int(11) NOT NULL,
  `exportateur_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_export` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `produit_id` int(11) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `poid` varchar(255) NOT NULL,
  `annee` varchar(255) NOT NULL,
  `mois` varchar(255) NOT NULL,
  `date_exportation` varchar(255) NOT NULL,
  `num_c` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `exportations`
--

INSERT INTO `exportations` (`id`, `exportateur_id`, `type`, `date_export`, `produit_id`, `pays`, `poid`, `annee`, `mois`, `date_exportation`, `num_c`) VALUES
(1, 1, 'Cargaisons', '2021-07-14 10:03:07', 8, '192', '84', '2021', '07', 'indef', ''),
(2, 0, 'Cargaisons', '2021-07-14 10:03:19', 8, '192', '51', '2021', '07', 'indef', ''),
(3, 2, 'Soutes', '2021-07-14 10:03:35', 8, '11', '125', '2021', '07', 'indef', ''),
(4, 1, 'Soutes', '2021-07-14 10:04:02', 5, '82', '98', '2021', '07', 'indef', ''),
(5, 2, 'Cargaisons', '2021-07-14 10:51:09', 8, '147', '58', '2021', '07', 'indef', ''),
(6, 2, 'Cargaisons', '2021-07-14 10:53:56', 9, '9', '40', '2021', '07', 'indef', ''),
(7, 1, 'Cargaisons', '2021-08-09 12:20:37', 8, '63', '800', '2021', '08', 'indef', ''),
(8, 2, 'Cargaisons', '2021-08-11 09:58:12', 9, '152', '258', '2019', '09', '2019-09-13', ''),
(9, 2, 'Soutes', '2021-08-11 10:23:00', 4, '11', '235', '2021', '08', 'indef', ''),
(10, 1, 'Soutes', '2021-08-11 12:05:17', 1, '48', '25', '2021', '08', 'indef', ''),
(11, 2, 'Soutes', '2021-08-22 15:07:36', 4, '10', '25', '2020', '08', '2020-08-12', ''),
(12, 4, 'Cargaisons', '2021-09-14 20:31:43', 3, '11', '43', '2021', '09', 'indef', '34434');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `exportations`
--
ALTER TABLE `exportations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `exportations`
--
ALTER TABLE `exportations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

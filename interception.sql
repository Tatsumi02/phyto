-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 sep. 2021 à 12:18
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
-- Structure de la table `interception`
--

CREATE TABLE `interception` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `numero_notification` varchar(255) NOT NULL,
  `motif` varchar(255) NOT NULL,
  `nature_produit` varchar(255) NOT NULL,
  `quantite_intercepte` varchar(255) NOT NULL,
  `quantite_expediee` varchar(255) NOT NULL,
  `exportateur` varchar(255) NOT NULL,
  `mesure_precite` varchar(255) NOT NULL,
  `numero_certificat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `interception`
--

INSERT INTO `interception` (`id`, `date`, `numero_notification`, `motif`, `nature_produit`, `quantite_intercepte`, `quantite_expediee`, `exportateur`, `mesure_precite`, `numero_certificat`) VALUES
(1, '2021-09-24', '56', '', 'dfe', '586', '256', 'PHP', 'dfe', '256'),
(2, '2021-09-24', '56', '', 'dfe', '586', '256', 'PHP', 'dfe', '256'),
(3, '2021-10-07', '854', '', 'dfe[po]', '586', '456 12/02/2021', 'PHP', 'dfepoi', '451256'),
(4, '2021-09-17', '25', 'lklo', 'dfe', '254', '254', 'tootle', 'dfepoi', '254'),
(5, '2021-09-30', '34', 'lkloere', 'dfe[po]er', '34', '34', 'PHP', 'dfepoi34', '344');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `interception`
--
ALTER TABLE `interception`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `interception`
--
ALTER TABLE `interception`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

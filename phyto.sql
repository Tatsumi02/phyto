-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 15 sep. 2021 à 17:25
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.3.27

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
-- Structure de la table `acteurs`
--

CREATE TABLE `acteurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `num_certification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `acteurs`
--

INSERT INTO `acteurs` (`id`, `nom`, `prenom`, `phone`, `num_certification`) VALUES
(1, 'UCB', '', '88', ''),
(2, 'SAFE ENVIRONMENT', '', '989', ''),
(3, 'LABORATOIRE BIOPHAMA', '', '1674', ''),
(4, 'PARLITE FOODS SARL', '', '00', ''),
(5, 'SABC', '', '00', ''),
(6, 'SCR MAYA', '', '677278816', ''),
(7, 'SUPER LIFE CAMEROON', '', '699510790', ''),
(8, 'NEOLIFE INTERNATIONAL', '', '677214407', ''),
(9, 'DF DISTRIBUTION', '', '699883192', ''),
(10, 'LA PIZZERIA  SARL', '', '03608', ''),
(11, 'TCHOUASSI TCHOUGOUÉ ARNAUD', '', '699954144', ''),
(12, 'ANTOINE FOKO', '', '666487080', ''),
(13, 'CCN', '', '683952065', ''),
(14, 'SPORF MINDEM SERVICES', '', '651849662', ''),
(15, 'SMS SARL', '', '9140', ''),
(16, 'ETS NOUMEN ET FILS', '', '693939398', ''),
(17, 'SITRAB CAM', '', '9442', ''),
(18, 'GMR (GRENIER DU MONDE RURAL)', '', '677622923', ''),
(19, 'PHP', '', '677585015', ''),
(20, 'SOCIETÉ SOTICAM', '', '655171973', ''),
(21, 'VERDJAI Epse MBUH ', '', '670020901', ''),
(22, 'ETS POBS', '', '6151', ''),
(23, 'GUINNESS CAMEROUN SA', '', '977214407', ''),
(24, 'DOUAL\'AIR', '', '310', ''),
(25, 'EKANI AWONO THIERRY', '', '690898620', ''),
(26, 'FOUNAMILDI AMANI', '', '69', ''),
(27, 'WAFFO DOMGA FABRICE ROMEO', '', '678089306', ''),
(28, 'PRÉSIDENCE DE LA REPUBLIQUE DU CAMEROUN/ CABINET CIVIL', '', '12546', ''),
(29, 'LE JARDIN D\'AMY (CALEJA)', '', '00', ''),
(30, 'ADJ. MOLLOH', '', '00', ''),
(31, 'CAM DIS ALIM', '', '677623495', ''),
(32, 'NESTLE CAMEROUN SA', '', '677214407', ''),
(33, 'XTRADE ', '', '656123406', ''),
(34, 'AFRIBOM CAMEROUN SARL', '', '696819929', ''),
(35, 'CHOCOCAM', '', '275', ''),
(36, 'MISS POP', '', '671816550', ''),
(37, 'SAFACAM', '', '3242', ''),
(38, 'DR INDUSTRY SARL', '', '699704429', ''),
(39, 'ETS CAMEROUN  DRTS', '', '656995128', ''),
(40, 'AVYST LIFESCIENCE', '', '696469262', ''),
(41, 'SODEAC ', '', '677585015', ''),
(42, 'SOCICAM', '', '00', ''),
(43, 'S3C', '', '658056680', ''),
(44, 'CAMDA', '', '00', ''),
(45, 'NEW FOODS CO', '', '68376239', ''),
(46, 'LA PASTA SA', '', '1887', ''),
(47, 'OBT SHIPPING CAMEROUN SA', '', '1594', ''),
(48, 'CICAM ', '', '233406215', ''),
(49, 'SOEVO CAMEROUN', '', '699803491', ''),
(50, 'XIVERSIDE COMMON INITIATIVE GROUP', '', '00', ''),
(51, 'PPG CAMEROUN', '', '6', ''),
(52, 'SOFAMAC SOA CAMEROUN', '', '57', ''),
(53, 'SIC CACAO', '', '570', ''),
(54, 'XAVIER ABEC  K TENGUIA', '', '677832902', ''),
(55, 'ETS CORNER STONE CAMEROUN ', '', '695252391', ''),
(56, 'BOH PLANTATION', '', '694272491', ''),
(57, 'VOLCACTRO SARL', '', '677760486', ''),
(58, 'SIKA', '', '691642157', ''),
(59, 'SOCAPNE SA', '', '00', ''),
(60, 'ALPICAM', '', '2130', ''),
(61, 'SOGEA SATOM', '', '5680', ''),
(62, 'CHIMTEC CAMEROUN', '', '334', ''),
(63, 'TRATAFIC MOTORS', '', '4181', ''),
(64, 'SONARA', '', '699141646', ''),
(65, 'NEL UNION CAMEROUN', '', '23342022', ''),
(66, 'FORTUNE INDUSTRIE LTD', '', '09', ''),
(67, 'ROYAL CHIMIE SA', '', '679235153', ''),
(68, 'SKY &amp; OVER PLC', '', '678356788', ''),
(69, 'LA FLORYBELLE', '', '97', ''),
(70, 'HORIZON PHYTO PLUS', '', '2131', ''),
(71, 'SODIP SARL', '', '1814', ''),
(72, 'PROLEG', '', '697596329', ''),
(73, 'FLORISIMA', '', '699948931', ''),
(74, 'HORTICAM', '', '67', ''),
(75, 'CERES  AGRICOLES', '', '694584578', ''),
(76, 'OK FOODS', '', '77', ''),
(77, 'NABCO', '', '65', ''),
(78, 'AGROCHEM ', '', '05', ''),
(79, 'CDC', '', '63', ''),
(80, 'SOCAPALM', '', '98', ''),
(81, 'DOMAYO FARMING', '', '43', ''),
(82, 'SEMAGRI', '', '78', ''),
(83, 'ARYSTA', '', '99', ''),
(84, 'FIMEX', '', '44', ''),
(85, 'GREEN STAR', '', '52', ''),
(86, 'BOUTIQUE DU CHOCOLLAT', '', '21', ''),
(87, 'BAT CAMEROUN', '', '11', ''),
(88, 'SODISNI', '', '40', ''),
(89, 'ATRIUM', '', '76', ''),
(90, 'OLAMCAM SA', '', '06', ''),
(91, 'SADRY SARL', '', '78', ''),
(92, 'LES FLORALIES', '', '098', ''),
(93, 'TAMTAM  SOLEIL', '', '699144227', ''),
(94, 'ETS MBOTO  AFRICA', '', '677134837', ''),
(95, 'AFRICA BIO CAMEROON', '', '677626197', ''),
(96, 'ETS TOUT VA BIEN', '', '678414185', ''),
(97, 'ETS DJUIDJIE', '', '673748812', ''),
(98, 'MAMA AFRICA', '', '673296944', ''),
(99, 'EVELAND', '', '691820918', ''),
(100, 'ETS WADSSE ET FILS', '', '699825902', ''),
(101, 'MADE OF AFRICA', '', '691820918', ''),
(102, 'ETS FRUITS ET LEGUMES', '', '673379173', ''),
(103, 'BIONATURA', '', '699000087', ''),
(104, 'ETS GNEPIBA', '', '677624243', ''),
(105, 'ETS JDB', '', '699831237', ''),
(106, 'SEPTROPIC', '', '677942505', ''),
(107, 'AFRICA EXOTIC FOOD', '', '699020913', ''),
(108, 'TUNDA EXOTIC FOODS', '', '693130541', ''),
(109, 'GIC TERRESPOIR', '', '677739157', ''),
(110, 'ETS MBOTO  AFRICA/JICE', '', '696292229', ''),
(111, 'KORA DISTRIBUTION', '', '651596161', ''),
(112, 'GIC FRUILEG', '', '691820918', ''),
(113, 'MEGAFO INTER', '', '697805624', ''),
(114, 'ETS FODJEU EDMOND', '', '677621277', ''),
(115, 'AGRO EXPORT', '', '698543017', ''),
(116, 'DOMCHI', '', '00', ''),
(117, 'D4 SARL', '', '693132189', ''),
(118, 'GRENIER D\'AFRIQUE CENTRALE SARL', '', '699982559', ''),
(119, 'EQUATO FOOD &amp; SERVICES', '', '02', ''),
(120, 'PRETTIS CORPORATION', '', '682962828', ''),
(121, 'FRUIT PASSION', '', '699308190', ''),
(122, 'AMADOU TIDJANI', '', '696496748', ''),
(123, 'EXOTIC NGALENA SAARL', '', '691663346', ''),
(124, 'SCOOP*S MEPO*O', '', '699954158', ''),
(125, 'MEKAMCHE', 'ELISABETH', '679700321', ''),
(126, 'UNAPAC', '', '99', ''),
(127, 'TROPICAL FRUIT EXPORT', '', '67', ''),
(128, 'ETS KD', '', '678974789', ''),
(129, 'ETS MARANATHA', '', '677566772', ''),
(130, 'SPDP CAPLAIN', '', '54', ''),
(131, 'KAMSU EXOTIC FOOD SARL', '', '670175278', ''),
(132, 'DIASPO SERVICES &amp; PRODUCT', '', '670175278', ''),
(133, 'ETS WESTERN FOODS', '', '699796950', ''),
(134, 'PERSEVERENCE', '', '696303289', ''),
(135, 'ETOGA', 'JEAN FELIX', '670175278', ''),
(136, 'SOCIETE GOLDEN', '', '691607585', ''),
(137, 'AGROTRADE', '', '699968653', ''),
(138, 'AFRIQUE SOLUTION', '', '676643551', ''),
(139, 'ETS FOKOU', '', '34', ''),
(140, 'ETS TANKOU', '', '90', ''),
(141, 'ETS NYAKAM', '', '699977839', ''),
(142, 'ETS PAYSAN', '', '70', ''),
(143, 'TALLA', 'ALAIN', '0675538770', '');

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
(12, 4, 'Cargaisons', '2021-09-14 20:31:43', 3, '11', '43', '2021', '09', 'indef', '34434'),
(13, 143, 'Soutes', '2021-09-15 15:02:41', 58, '11', '45', '2021', '09', 'indef', '546888'),
(14, 31, 'Soutes', '2021-09-15 15:04:09', 48, '11', '45', '2021', '09', 'indef', ''),
(15, 107, 'Soutes', '2021-09-15 15:19:22', 19, '12', '43', '2021', '09', '2021-09-01', '3456');

-- --------------------------------------------------------

--
-- Structure de la table `importations`
--

CREATE TABLE `importations` (
  `id` int(11) NOT NULL,
  `importateur_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_import` datetime NOT NULL,
  `produit_id` int(11) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `poid` varchar(255) NOT NULL,
  `annee` varchar(255) NOT NULL,
  `mois` varchar(255) NOT NULL,
  `date_importation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `numero_certificat` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `interception`
--

INSERT INTO `interception` (`id`, `date`, `numero_notification`, `motif`, `nature_produit`, `quantite_intercepte`, `quantite_expediee`, `exportateur`, `mesure_precite`, `numero_certificat`, `pays`) VALUES
(1, '2021-01-29', '124706', 'PRESENCE DES ORGANISMES NUISIBLE', 'AUBERGINE', '90KG', '900KG', 'EQUATO FOOD & SERVICES', 'DESCENTE SUR LE TERRAIN POSES DES PIEGES', '86493', 'Belgique');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `code` int(3) NOT NULL,
  `alpha2` varchar(2) NOT NULL,
  `alpha3` varchar(3) NOT NULL,
  `nom_en_gb` varchar(45) NOT NULL,
  `nom_fr_fr` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `code`, `alpha2`, `alpha3`, `nom_en_gb`, `nom_fr_fr`) VALUES
(1, 4, 'AF', 'AFG', 'Afghanistan', 'Afghanistan'),
(2, 8, 'AL', 'ALB', 'Albania', 'Albanie'),
(3, 10, 'AQ', 'ATA', 'Antarctica', 'Antarctique'),
(4, 12, 'DZ', 'DZA', 'Algeria', 'Algérie'),
(5, 16, 'AS', 'ASM', 'American Samoa', 'Samoa Américaines'),
(6, 20, 'AD', 'AND', 'Andorra', 'Andorre'),
(7, 24, 'AO', 'AGO', 'Angola', 'Angola'),
(8, 28, 'AG', 'ATG', 'Antigua and Barbuda', 'Antigua-et-Barbuda'),
(9, 31, 'AZ', 'AZE', 'Azerbaijan', 'Azerbaïdjan'),
(10, 32, 'AR', 'ARG', 'Argentina', 'Argentine'),
(11, 36, 'AU', 'AUS', 'Australia', 'Australie'),
(12, 40, 'AT', 'AUT', 'Austria', 'Autriche'),
(13, 44, 'BS', 'BHS', 'Bahamas', 'Bahamas'),
(14, 48, 'BH', 'BHR', 'Bahrain', 'Bahreïn'),
(15, 50, 'BD', 'BGD', 'Bangladesh', 'Bangladesh'),
(16, 51, 'AM', 'ARM', 'Armenia', 'Arménie'),
(17, 52, 'BB', 'BRB', 'Barbados', 'Barbade'),
(18, 56, 'BE', 'BEL', 'Belgium', 'Belgique'),
(19, 60, 'BM', 'BMU', 'Bermuda', 'Bermudes'),
(20, 64, 'BT', 'BTN', 'Bhutan', 'Bhoutan'),
(21, 68, 'BO', 'BOL', 'Bolivia', 'Bolivie'),
(22, 70, 'BA', 'BIH', 'Bosnia and Herzegovina', 'Bosnie-Herzégovine'),
(23, 72, 'BW', 'BWA', 'Botswana', 'Botswana'),
(24, 74, 'BV', 'BVT', 'Bouvet Island', 'Île Bouvet'),
(25, 76, 'BR', 'BRA', 'Brazil', 'Brésil'),
(26, 84, 'BZ', 'BLZ', 'Belize', 'Belize'),
(27, 86, 'IO', 'IOT', 'British Indian Ocean Territory', 'Territoire Britannique de l\'Océan Indien'),
(28, 90, 'SB', 'SLB', 'Solomon Islands', 'Îles Salomon'),
(29, 92, 'VG', 'VGB', 'British Virgin Islands', 'Îles Vierges Britanniques'),
(30, 96, 'BN', 'BRN', 'Brunei Darussalam', 'Brunéi Darussalam'),
(31, 100, 'BG', 'BGR', 'Bulgaria', 'Bulgarie'),
(32, 104, 'MM', 'MMR', 'Myanmar', 'Myanmar'),
(33, 108, 'BI', 'BDI', 'Burundi', 'Burundi'),
(34, 112, 'BY', 'BLR', 'Belarus', 'Bélarus'),
(35, 116, 'KH', 'KHM', 'Cambodia', 'Cambodge'),
(36, 120, 'CM', 'CMR', 'Cameroon', 'Cameroun'),
(37, 124, 'CA', 'CAN', 'Canada', 'Canada'),
(38, 132, 'CV', 'CPV', 'Cape Verde', 'Cap-vert'),
(39, 136, 'KY', 'CYM', 'Cayman Islands', 'Îles Caïmanes'),
(40, 140, 'CF', 'CAF', 'Central African', 'République Centrafricaine'),
(41, 144, 'LK', 'LKA', 'Sri Lanka', 'Sri Lanka'),
(42, 148, 'TD', 'TCD', 'Chad', 'Tchad'),
(43, 152, 'CL', 'CHL', 'Chile', 'Chili'),
(44, 156, 'CN', 'CHN', 'China', 'Chine'),
(45, 158, 'TW', 'TWN', 'Taiwan', 'Taïwan'),
(46, 162, 'CX', 'CXR', 'Christmas Island', 'Île Christmas'),
(47, 166, 'CC', 'CCK', 'Cocos (Keeling) Islands', 'Îles Cocos (Keeling)'),
(48, 170, 'CO', 'COL', 'Colombia', 'Colombie'),
(49, 174, 'KM', 'COM', 'Comoros', 'Comores'),
(50, 175, 'YT', 'MYT', 'Mayotte', 'Mayotte'),
(51, 178, 'CG', 'COG', 'Republic of the Congo', 'République du Congo'),
(52, 180, 'CD', 'COD', 'The Democratic Republic Of The Congo', 'République Démocratique du Congo'),
(53, 184, 'CK', 'COK', 'Cook Islands', 'Îles Cook'),
(54, 188, 'CR', 'CRI', 'Costa Rica', 'Costa Rica'),
(55, 191, 'HR', 'HRV', 'Croatia', 'Croatie'),
(56, 192, 'CU', 'CUB', 'Cuba', 'Cuba'),
(57, 196, 'CY', 'CYP', 'Cyprus', 'Chypre'),
(58, 203, 'CZ', 'CZE', 'Czech Republic', 'République Tchèque'),
(59, 204, 'BJ', 'BEN', 'Benin', 'Bénin'),
(60, 208, 'DK', 'DNK', 'Denmark', 'Danemark'),
(61, 212, 'DM', 'DMA', 'Dominica', 'Dominique'),
(62, 214, 'DO', 'DOM', 'Dominican Republic', 'République Dominicaine'),
(63, 218, 'EC', 'ECU', 'Ecuador', 'Équateur'),
(64, 222, 'SV', 'SLV', 'El Salvador', 'El Salvador'),
(65, 226, 'GQ', 'GNQ', 'Equatorial Guinea', 'Guinée Équatoriale'),
(66, 231, 'ET', 'ETH', 'Ethiopia', 'Éthiopie'),
(67, 232, 'ER', 'ERI', 'Eritrea', 'Érythrée'),
(68, 233, 'EE', 'EST', 'Estonia', 'Estonie'),
(69, 234, 'FO', 'FRO', 'Faroe Islands', 'Îles Féroé'),
(70, 238, 'FK', 'FLK', 'Falkland Islands', 'Îles (malvinas) Falkland'),
(71, 239, 'GS', 'SGS', 'South Georgia and the South Sandwich Islands', 'Géorgie du Sud et les Îles Sandwich du Sud'),
(72, 242, 'FJ', 'FJI', 'Fiji', 'Fidji'),
(73, 246, 'FI', 'FIN', 'Finland', 'Finlande'),
(74, 248, 'AX', 'ALA', 'Åland Islands', 'Îles Åland'),
(75, 250, 'FR', 'FRA', 'France', 'France'),
(76, 254, 'GF', 'GUF', 'French Guiana', 'Guyane Française'),
(77, 258, 'PF', 'PYF', 'French Polynesia', 'Polynésie Française'),
(78, 260, 'TF', 'ATF', 'French Southern Territories', 'Terres Australes Françaises'),
(79, 262, 'DJ', 'DJI', 'Djibouti', 'Djibouti'),
(80, 266, 'GA', 'GAB', 'Gabon', 'Gabon'),
(81, 268, 'GE', 'GEO', 'Georgia', 'Géorgie'),
(82, 270, 'GM', 'GMB', 'Gambia', 'Gambie'),
(83, 275, 'PS', 'PSE', 'Occupied Palestinian Territory', 'Territoire Palestinien Occupé'),
(84, 276, 'DE', 'DEU', 'Germany', 'Allemagne'),
(85, 288, 'GH', 'GHA', 'Ghana', 'Ghana'),
(86, 292, 'GI', 'GIB', 'Gibraltar', 'Gibraltar'),
(87, 296, 'KI', 'KIR', 'Kiribati', 'Kiribati'),
(88, 300, 'GR', 'GRC', 'Greece', 'Grèce'),
(89, 304, 'GL', 'GRL', 'Greenland', 'Groenland'),
(90, 308, 'GD', 'GRD', 'Grenada', 'Grenade'),
(91, 312, 'GP', 'GLP', 'Guadeloupe', 'Guadeloupe'),
(92, 316, 'GU', 'GUM', 'Guam', 'Guam'),
(93, 320, 'GT', 'GTM', 'Guatemala', 'Guatemala'),
(94, 324, 'GN', 'GIN', 'Guinea', 'Guinée'),
(95, 328, 'GY', 'GUY', 'Guyana', 'Guyana'),
(96, 332, 'HT', 'HTI', 'Haiti', 'Haïti'),
(97, 334, 'HM', 'HMD', 'Heard Island and McDonald Islands', 'Îles Heard et Mcdonald'),
(98, 336, 'VA', 'VAT', 'Vatican City State', 'Saint-Siège (état de la Cité du Vatican)'),
(99, 340, 'HN', 'HND', 'Honduras', 'Honduras'),
(100, 344, 'HK', 'HKG', 'Hong Kong', 'Hong-Kong'),
(101, 348, 'HU', 'HUN', 'Hungary', 'Hongrie'),
(102, 352, 'IS', 'ISL', 'Iceland', 'Islande'),
(103, 356, 'IN', 'IND', 'India', 'Inde'),
(104, 360, 'ID', 'IDN', 'Indonesia', 'Indonésie'),
(105, 364, 'IR', 'IRN', 'Islamic Republic of Iran', 'République Islamique d\'Iran'),
(106, 368, 'IQ', 'IRQ', 'Iraq', 'Iraq'),
(107, 372, 'IE', 'IRL', 'Ireland', 'Irlande'),
(108, 376, 'IL', 'ISR', 'Israel', 'Israël'),
(109, 380, 'IT', 'ITA', 'Italy', 'Italie'),
(110, 384, 'CI', 'CIV', 'Côte d\'Ivoire', 'Côte d\'Ivoire'),
(111, 388, 'JM', 'JAM', 'Jamaica', 'Jamaïque'),
(112, 392, 'JP', 'JPN', 'Japan', 'Japon'),
(113, 398, 'KZ', 'KAZ', 'Kazakhstan', 'Kazakhstan'),
(114, 400, 'JO', 'JOR', 'Jordan', 'Jordanie'),
(115, 404, 'KE', 'KEN', 'Kenya', 'Kenya'),
(116, 408, 'KP', 'PRK', 'Democratic People\'s Republic of Korea', 'République Populaire Démocratique de Corée'),
(117, 410, 'KR', 'KOR', 'Republic of Korea', 'République de Corée'),
(118, 414, 'KW', 'KWT', 'Kuwait', 'Koweït'),
(119, 417, 'KG', 'KGZ', 'Kyrgyzstan', 'Kirghizistan'),
(120, 418, 'LA', 'LAO', 'Lao People\'s Democratic Republic', 'République Démocratique Populaire Lao'),
(121, 422, 'LB', 'LBN', 'Lebanon', 'Liban'),
(122, 426, 'LS', 'LSO', 'Lesotho', 'Lesotho'),
(123, 428, 'LV', 'LVA', 'Latvia', 'Lettonie'),
(124, 430, 'LR', 'LBR', 'Liberia', 'Libéria'),
(125, 434, 'LY', 'LBY', 'Libyan Arab Jamahiriya', 'Jamahiriya Arabe Libyenne'),
(126, 438, 'LI', 'LIE', 'Liechtenstein', 'Liechtenstein'),
(127, 440, 'LT', 'LTU', 'Lithuania', 'Lituanie'),
(128, 442, 'LU', 'LUX', 'Luxembourg', 'Luxembourg'),
(129, 446, 'MO', 'MAC', 'Macao', 'Macao'),
(130, 450, 'MG', 'MDG', 'Madagascar', 'Madagascar'),
(131, 454, 'MW', 'MWI', 'Malawi', 'Malawi'),
(132, 458, 'MY', 'MYS', 'Malaysia', 'Malaisie'),
(133, 462, 'MV', 'MDV', 'Maldives', 'Maldives'),
(134, 466, 'ML', 'MLI', 'Mali', 'Mali'),
(135, 470, 'MT', 'MLT', 'Malta', 'Malte'),
(136, 474, 'MQ', 'MTQ', 'Martinique', 'Martinique'),
(137, 478, 'MR', 'MRT', 'Mauritania', 'Mauritanie'),
(138, 480, 'MU', 'MUS', 'Mauritius', 'Maurice'),
(139, 484, 'MX', 'MEX', 'Mexico', 'Mexique'),
(140, 492, 'MC', 'MCO', 'Monaco', 'Monaco'),
(141, 496, 'MN', 'MNG', 'Mongolia', 'Mongolie'),
(142, 498, 'MD', 'MDA', 'Republic of Moldova', 'République de Moldova'),
(143, 500, 'MS', 'MSR', 'Montserrat', 'Montserrat'),
(144, 504, 'MA', 'MAR', 'Morocco', 'Maroc'),
(145, 508, 'MZ', 'MOZ', 'Mozambique', 'Mozambique'),
(146, 512, 'OM', 'OMN', 'Oman', 'Oman'),
(147, 516, 'NA', 'NAM', 'Namibia', 'Namibie'),
(148, 520, 'NR', 'NRU', 'Nauru', 'Nauru'),
(149, 524, 'NP', 'NPL', 'Nepal', 'Népal'),
(150, 528, 'NL', 'NLD', 'Netherlands', 'Pays-Bas'),
(151, 530, 'AN', 'ANT', 'Netherlands Antilles', 'Antilles Néerlandaises'),
(152, 533, 'AW', 'ABW', 'Aruba', 'Aruba'),
(153, 540, 'NC', 'NCL', 'New Caledonia', 'Nouvelle-Calédonie'),
(154, 548, 'VU', 'VUT', 'Vanuatu', 'Vanuatu'),
(155, 554, 'NZ', 'NZL', 'New Zealand', 'Nouvelle-Zélande'),
(156, 558, 'NI', 'NIC', 'Nicaragua', 'Nicaragua'),
(157, 562, 'NE', 'NER', 'Niger', 'Niger'),
(158, 566, 'NG', 'NGA', 'Nigeria', 'Nigéria'),
(159, 570, 'NU', 'NIU', 'Niue', 'Niué'),
(160, 574, 'NF', 'NFK', 'Norfolk Island', 'Île Norfolk'),
(161, 578, 'NO', 'NOR', 'Norway', 'Norvège'),
(162, 580, 'MP', 'MNP', 'Northern Mariana Islands', 'Îles Mariannes du Nord'),
(163, 581, 'UM', 'UMI', 'United States Minor Outlying Islands', 'Îles Mineures Éloignées des États-Unis'),
(164, 583, 'FM', 'FSM', 'Federated States of Micronesia', 'États Fédérés de Micronésie'),
(165, 584, 'MH', 'MHL', 'Marshall Islands', 'Îles Marshall'),
(166, 585, 'PW', 'PLW', 'Palau', 'Palaos'),
(167, 586, 'PK', 'PAK', 'Pakistan', 'Pakistan'),
(168, 591, 'PA', 'PAN', 'Panama', 'Panama'),
(169, 598, 'PG', 'PNG', 'Papua New Guinea', 'Papouasie-Nouvelle-Guinée'),
(170, 600, 'PY', 'PRY', 'Paraguay', 'Paraguay'),
(171, 604, 'PE', 'PER', 'Peru', 'Pérou'),
(172, 608, 'PH', 'PHL', 'Philippines', 'Philippines'),
(173, 612, 'PN', 'PCN', 'Pitcairn', 'Pitcairn'),
(174, 616, 'PL', 'POL', 'Poland', 'Pologne'),
(175, 620, 'PT', 'PRT', 'Portugal', 'Portugal'),
(176, 624, 'GW', 'GNB', 'Guinea-Bissau', 'Guinée-Bissau'),
(177, 626, 'TL', 'TLS', 'Timor-Leste', 'Timor-Leste'),
(178, 630, 'PR', 'PRI', 'Puerto Rico', 'Porto Rico'),
(179, 634, 'QA', 'QAT', 'Qatar', 'Qatar'),
(180, 638, 'RE', 'REU', 'Réunion', 'Réunion'),
(181, 642, 'RO', 'ROU', 'Romania', 'Roumanie'),
(182, 643, 'RU', 'RUS', 'Russian Federation', 'Fédération de Russie'),
(183, 646, 'RW', 'RWA', 'Rwanda', 'Rwanda'),
(184, 654, 'SH', 'SHN', 'Saint Helena', 'Sainte-Hélène'),
(185, 659, 'KN', 'KNA', 'Saint Kitts and Nevis', 'Saint-Kitts-et-Nevis'),
(186, 660, 'AI', 'AIA', 'Anguilla', 'Anguilla'),
(187, 662, 'LC', 'LCA', 'Saint Lucia', 'Sainte-Lucie'),
(188, 666, 'PM', 'SPM', 'Saint-Pierre and Miquelon', 'Saint-Pierre-et-Miquelon'),
(189, 670, 'VC', 'VCT', 'Saint Vincent and the Grenadines', 'Saint-Vincent-et-les Grenadines'),
(190, 674, 'SM', 'SMR', 'San Marino', 'Saint-Marin'),
(191, 678, 'ST', 'STP', 'Sao Tome and Principe', 'Sao Tomé-et-Principe'),
(192, 682, 'SA', 'SAU', 'Saudi Arabia', 'Arabie Saoudite'),
(193, 686, 'SN', 'SEN', 'Senegal', 'Sénégal'),
(194, 690, 'SC', 'SYC', 'Seychelles', 'Seychelles'),
(195, 694, 'SL', 'SLE', 'Sierra Leone', 'Sierra Leone'),
(196, 702, 'SG', 'SGP', 'Singapore', 'Singapour'),
(197, 703, 'SK', 'SVK', 'Slovakia', 'Slovaquie'),
(198, 704, 'VN', 'VNM', 'Vietnam', 'Viet Nam'),
(199, 705, 'SI', 'SVN', 'Slovenia', 'Slovénie'),
(200, 706, 'SO', 'SOM', 'Somalia', 'Somalie'),
(201, 710, 'ZA', 'ZAF', 'South Africa', 'Afrique du Sud'),
(202, 716, 'ZW', 'ZWE', 'Zimbabwe', 'Zimbabwe'),
(203, 724, 'ES', 'ESP', 'Spain', 'Espagne'),
(204, 732, 'EH', 'ESH', 'Western Sahara', 'Sahara Occidental'),
(205, 736, 'SD', 'SDN', 'Sudan', 'Soudan'),
(206, 740, 'SR', 'SUR', 'Suriname', 'Suriname'),
(207, 744, 'SJ', 'SJM', 'Svalbard and Jan Mayen', 'Svalbard etÎle Jan Mayen'),
(208, 748, 'SZ', 'SWZ', 'Swaziland', 'Swaziland'),
(209, 752, 'SE', 'SWE', 'Sweden', 'Suède'),
(210, 756, 'CH', 'CHE', 'Switzerland', 'Suisse'),
(211, 760, 'SY', 'SYR', 'Syrian Arab Republic', 'République Arabe Syrienne'),
(212, 762, 'TJ', 'TJK', 'Tajikistan', 'Tadjikistan'),
(213, 764, 'TH', 'THA', 'Thailand', 'Thaïlande'),
(214, 768, 'TG', 'TGO', 'Togo', 'Togo'),
(215, 772, 'TK', 'TKL', 'Tokelau', 'Tokelau'),
(216, 776, 'TO', 'TON', 'Tonga', 'Tonga'),
(217, 780, 'TT', 'TTO', 'Trinidad and Tobago', 'Trinité-et-Tobago'),
(218, 784, 'AE', 'ARE', 'United Arab Emirates', 'Émirats Arabes Unis'),
(219, 788, 'TN', 'TUN', 'Tunisia', 'Tunisie'),
(220, 792, 'TR', 'TUR', 'Turkey', 'Turquie'),
(221, 795, 'TM', 'TKM', 'Turkmenistan', 'Turkménistan'),
(222, 796, 'TC', 'TCA', 'Turks and Caicos Islands', 'Îles Turks et Caïques'),
(223, 798, 'TV', 'TUV', 'Tuvalu', 'Tuvalu'),
(224, 800, 'UG', 'UGA', 'Uganda', 'Ouganda'),
(225, 804, 'UA', 'UKR', 'Ukraine', 'Ukraine'),
(226, 807, 'MK', 'MKD', 'The Former Yugoslav Republic of Macedonia', 'L\'ex-République Yougoslave de Macédoine'),
(227, 818, 'EG', 'EGY', 'Egypt', 'Égypte'),
(228, 826, 'GB', 'GBR', 'United Kingdom', 'Royaume-Uni'),
(229, 833, 'IM', 'IMN', 'Isle of Man', 'Île de Man'),
(230, 834, 'TZ', 'TZA', 'United Republic Of Tanzania', 'République-Unie de Tanzanie'),
(231, 840, 'US', 'USA', 'United States', 'États-Unis'),
(232, 850, 'VI', 'VIR', 'U.S. Virgin Islands', 'Îles Vierges des États-Unis'),
(233, 854, 'BF', 'BFA', 'Burkina Faso', 'Burkina Faso'),
(234, 858, 'UY', 'URY', 'Uruguay', 'Uruguay'),
(235, 860, 'UZ', 'UZB', 'Uzbekistan', 'Ouzbékistan'),
(236, 862, 'VE', 'VEN', 'Venezuela', 'Venezuela'),
(237, 876, 'WF', 'WLF', 'Wallis and Futuna', 'Wallis et Futuna'),
(238, 882, 'WS', 'WSM', 'Samoa', 'Samoa'),
(239, 887, 'YE', 'YEM', 'Yemen', 'Yémen'),
(240, 891, 'CS', 'SCG', 'Serbia and Montenegro', 'Serbie-et-Monténégro'),
(241, 894, 'ZM', 'ZMB', 'Zambia', 'Zambie');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `speculation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `speculation_id`) VALUES
(1, 'Miondo ', 35),
(2, 'saka saka ', 35),
(3, 'tapioca ', 35),
(4, 'foufou ', 35),
(5, 'tubercules', 35),
(6, 'pate de manioc ', 35),
(7, 'Safou', 36),
(8, 'fruit de la passion ', 36),
(9, 'mangue', 36),
(10, 'papaye', 36),
(11, 'orange', 36),
(12, 'pamplemousse', 36),
(13, 'Ananas', 36),
(14, 'Goyave', 36),
(15, 'Arachide', 37),
(16, 'noix de palme ', 37),
(17, 'pistache ', 37),
(18, 'Noix de coco', 37),
(19, 'Beurre de cacao', 37),
(20, 'Café ', 38),
(21, 'Cola ', 38),
(22, 'Biter cola ', 38),
(23, 'Fèves de cacao ', 38),
(24, 'Pate de cacao ', 38),
(25, 'Eru', 39),
(26, 'Ndolé', 39),
(27, 'Feuille de patates ', 39),
(28, 'Morelle noire ', 39),
(29, 'Water leave', 39),
(30, ' Folon ', 39),
(31, 'Tomate', 39),
(32, 'Gombo', 39),
(33, 'Piment ', 39),
(34, 'Djangsan', 40),
(35, 'Poivre', 40),
(36, 'Gingembre', 40),
(37, 'Poivron ', 41),
(38, ' Poireau ', 41),
(39, ' Persil ', 41),
(40, 'Aubergine', 41),
(41, 'Macabo', 42),
(42, 'Taro', 42),
(43, 'Patate ', 42),
(44, ' Igname', 42),
(45, 'Banane', 43),
(46, 'Plantain', 43),
(47, 'Chikwangue', 35),
(48, 'Bobolo', 35),
(49, 'Water foufou', 35),
(50, 'Canne a sucre', 36),
(51, 'Noni', 36),
(52, 'Mangoustan', 36),
(53, 'Ramboustan', 36),
(54, 'Avocat', 36),
(55, 'Tamarillo', 36),
(56, 'Amaranthe', 39),
(57, 'Feuille de macabo', 39),
(58, 'Cacao', 38),
(59, 'Thé', 38),
(60, 'Feuille de banane', 43),
(61, 'Homi', 40),
(62, 'Curcuma', 40),
(63, 'Rondelle', 40),
(64, ' 4 cotés', 40),
(65, 'Nbongo', 40),
(66, 'Epices Nkui', 40),
(67, 'Oignons', 41),
(68, 'Ail', 41),
(69, 'Haricot commun', 37),
(70, 'Koki', 37),
(71, 'Vouandzou', 37);

-- --------------------------------------------------------

--
-- Structure de la table `speculations`
--

CREATE TABLE `speculations` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `speculations`
--

INSERT INTO `speculations` (`id`, `nom`, `type`) VALUES
(1, 'Vitro plants de bananiers', 'soutes'),
(2, 'Noix prégermées palmiers a huile', 'soutes'),
(3, 'Semences potagères ', 'soutes'),
(4, 'pesticides', 'soutes'),
(5, 'Biofertilisants', 'soutes'),
(6, 'Fleurs  fraiches et sèches', 'soutes'),
(7, 'Enzymes pour industries', 'soutes'),
(8, 'Aromes ', 'soutes'),
(9, 'Colorants', 'soutes'),
(10, 'Vivres frais (fruits et légumes)', 'soutes'),
(11, 'Compléments alimentaires', 'soutes'),
(12, 'Cigarettes', 'soutes'),
(13, 'Vins', 'soutes'),
(14, 'Honblon', 'soutes'),
(15, 'Hormones de croissance des plantes (Ryzup 40 SG)', 'soutes'),
(16, 'Huile végétale', 'soutes'),
(17, 'Pate alimentaire', 'soutes'),
(18, 'Condiments (épices)', 'soutes'),
(19, 'Riz Thaïlandais', 'soutes'),
(20, 'Chocolats', 'soutes'),
(21, 'Achéké (tapioca)', 'soutes'),
(22, 'Oignons/ails', 'soutes'),
(23, 'Semences cacao', 'soutes'),
(24, 'Thé', 'soutes'),
(25, 'Café', 'soutes'),
(26, 'Roches pour analyse', 'soutes'),
(27, 'Margarine et autres graisses végétales', 'soutes'),
(28, 'Jus de fruits', 'soutes'),
(29, 'Matières premières pour (vin, whisky et champagne)', 'soutes'),
(30, 'Mais', 'soutes'),
(31, 'Sucre', 'soutes'),
(32, 'Milieux de culture pour la microbiologie', 'soutes'),
(33, 'produits laitiers', 'soutes'),
(34, 'Dangerous Goods', 'soutes'),
(35, 'Manioc ', 'soutes'),
(36, 'Fruits', 'soutes'),
(37, 'Oléagineux', 'soutes'),
(38, 'Les Stimulants', 'soutes'),
(39, 'Les Légumes', 'soutes'),
(40, 'Les épices', 'soutes'),
(41, 'Les condiments verts', 'soutes'),
(42, 'Les racines et tubercules', 'soutes'),
(43, 'Les musacées', 'soutes');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'root', 'mm', 'admin'),
(2, 'user', 'mm', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteurs`
--
ALTER TABLE `acteurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `exportations`
--
ALTER TABLE `exportations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `importations`
--
ALTER TABLE `importations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `interception`
--
ALTER TABLE `interception`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alpha2` (`alpha2`),
  ADD UNIQUE KEY `alpha3` (`alpha3`),
  ADD UNIQUE KEY `code_unique` (`code`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `speculations`
--
ALTER TABLE `speculations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteurs`
--
ALTER TABLE `acteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT pour la table `exportations`
--
ALTER TABLE `exportations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `importations`
--
ALTER TABLE `importations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `interception`
--
ALTER TABLE `interception`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `speculations`
--
ALTER TABLE `speculations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 28 Juillet 2017 à 20:38
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `major_panel`
--

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id` int(255) NOT NULL,
  `nom` longtext CHARACTER SET utf8 NOT NULL,
  `tuile` int(1) NOT NULL,
  `titre` longtext CHARACTER SET utf8 NOT NULL,
  `cron` int(1) NOT NULL DEFAULT '0',
  `cron_exetime` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `module`
--

INSERT INTO `module` (`id`, `nom`, `tuile`, `titre`, `cron`, `cron_exetime`) VALUES
(1, 'meteo', 1, 'Météo', 1, '22:50:00-23:10:00'),
(2, 'meteo_vigilance', 2, 'Vigilance météo 57', 1, '00:00:00-23:59:59'),
(3, 'dealabs', 3, 'Fil XML Perso Dealabs', 1, '05:50:00-06:10:00,11:50:00-12:10:00,17:50:10-18:10:00,00:00:00-00:10:00'),
(4, 'carburant', 0, 'Prix carburant', 1, '00:00:00-23:59:59');

-- --------------------------------------------------------

--
-- Structure de la table `mod_carburant`
--

CREATE TABLE `mod_carburant` (
  `id` int(255) NOT NULL,
  `parametre` longtext COLLATE utf8_unicode_ci NOT NULL,
  `valeur` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `mod_carburant`
--

INSERT INTO `mod_carburant` (`id`, `parametre`, `valeur`) VALUES
(21, '57400009_SP95', '1.354'),
(20, '57200003_SP95', '1.339'),
(19, '57400001_SP95', '1.354'),
(18, '67260004_SP95', '1.329'),
(17, '57200004_SP95', '1.329'),
(16, '67260008_SP95', '1.359'),
(15, '57400007_SP95', '1.449'),
(8, 'id:57400007', 'Avia'),
(9, 'id:67260008', 'Carrefour Contact'),
(10, 'id:57200004', 'Cora'),
(11, 'id:67260004', 'E.Leclerc'),
(12, 'id:57400001', 'Cora'),
(13, 'id:57200003', 'Intermarché Super'),
(14, 'id:57400009', 'Intermarché Contact');

-- --------------------------------------------------------

--
-- Structure de la table `mod_dealabs`
--

CREATE TABLE `mod_dealabs` (
  `id` int(255) NOT NULL,
  `parametre` longtext COLLATE utf8_unicode_ci NOT NULL,
  `valeur` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `mod_dealabs`
--

INSERT INTO `mod_dealabs` (`id`, `parametre`, `valeur`) VALUES
(1, 'verif_id', '358458:358456:358453:358450:358449:358436:358435:358434:358433:358431:358430:356647:358429:358428:358426:358425:358416:358415:358411:358404:358403:358397:358395:358385:358382:358376:358365:358363:358362:358359:358356:358350:358347:358331:358329:358326:358323:358317:358309:358305:358301:358296:358295:358278:358270:358268:358267:358265:358263:358255:358249:358246:358230:358215:358206:358191:358190:358152:358147:358146:358142:358128:358120:358108:358095:358091:358086:358079:358078:358044:358022:358033:358028:357999:357985:357982:357981:357977:357973:357962:357958:357945:357925:357924:357897:357895:357888:357885:357881:357878:357874:357871:357866:357853:357851:357850:357849:357838:357831:357830:357825:357817:357816:357810:357804:357803:357797:357796:357792:357781:357779:357774:357765');

-- --------------------------------------------------------

--
-- Structure de la table `mod_meteo`
--

CREATE TABLE `mod_meteo` (
  `id` int(255) NOT NULL,
  `parametre` longtext NOT NULL,
  `valeur` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mod_meteo_vigilance`
--

CREATE TABLE `mod_meteo_vigilance` (
  `id` int(255) NOT NULL,
  `parametre` longtext NOT NULL,
  `valeur` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `mod_meteo_vigilance`
--

INSERT INTO `mod_meteo_vigilance` (`id`, `parametre`, `valeur`) VALUES
(1, 'alerte', '1');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mod_carburant`
--
ALTER TABLE `mod_carburant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mod_dealabs`
--
ALTER TABLE `mod_dealabs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mod_meteo`
--
ALTER TABLE `mod_meteo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mod_meteo_vigilance`
--
ALTER TABLE `mod_meteo_vigilance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `mod_carburant`
--
ALTER TABLE `mod_carburant`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `mod_dealabs`
--
ALTER TABLE `mod_dealabs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `mod_meteo`
--
ALTER TABLE `mod_meteo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `mod_meteo_vigilance`
--
ALTER TABLE `mod_meteo_vigilance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

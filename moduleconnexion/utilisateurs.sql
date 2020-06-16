-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 15 juin 2020 à 13:20
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `moduleconnexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID`, `login`, `prenom`, `nom`, `password`) VALUES
(35, 'naps', 'naps', 'naps', '$2y$12$bvQxFWP1VmlSDLjs2QYiKeM1jQJvzNecCUbTXqrDGPz2FrBCg4n.C'),
(34, 'nonn', 'nonn', 'nonn', '$2y$12$OHeY12NEIdQ5uj2Nf68zPO7D02bHC6YLsLOtkVgx/mpX2KmZGjYD2'),
(33, 'djomb', 'djomb', 'djomb', '$2y$12$hNvSs9tUjFWBTXL5qeCEteGWbKabaepfMWN4bV63hGEM1A8uPhVGW'),
(32, 'ouai', 'ouai', 'ouai', '$2y$12$TZtMn64IGF5wgE.uMhOaxOEtll4dsDoe41rfkGC5wZ3TBISI6w5YG'),
(31, 'non', 'non', 'non', '$2y$12$nzj8ToCI5.8zpZRU87h00.vl6dyS.SlouMP0JDulpXpNpgRRHOJsu'),
(30, 'mouss', 'tapha', 'ok', '$2y$12$rD3SmsGRwM927aY2zL2LRulWS8S8QbzxQ5BlAaT7EjSxET2ZS2hni'),
(29, 'okok', 'okok', 'okok', '39d0d38b6b9a01e2894db59a9985ba2df6c895d9'),
(28, 'non', 'non', 'non', '37031f99ac78580c9f82e04fa237d295ea10ca41'),
(27, 'oui', 'ouai', 'ouaii', '5898fc860300e228dcd54c0b1045b5fa0dcda502');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

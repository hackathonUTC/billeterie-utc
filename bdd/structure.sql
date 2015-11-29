-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 29 Novembre 2015 à 05:56
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `billetterie_utc`
--

-- --------------------------------------------------------

--
-- Structure de la table `assos`
--
-- Création :  Dim 29 Novembre 2015 à 04:49
--

DROP TABLE IF EXISTS `assos`;
CREATE TABLE IF NOT EXISTS `assos` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `verif_key` varchar(40) NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `verif_key` (`verif_key`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `assos`
--

INSERT INTO `assos` (`name`, `email`, `password`, `verified`, `verif_key`) VALUES
('billetterie', 'billetterie@assos.utc.fr', 'bc05063b0a126b900fa25c8de404391742f87e92', 1, 'bc05063b0a126b900fa25c8de404391742f87e92');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--
-- Création :  Dim 29 Novembre 2015 à 04:52
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `eventID` int(11) NOT NULL AUTO_INCREMENT,
  `asso` varchar(255) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `eventDate` date NOT NULL,
  `eventFlyer` varchar(255) NOT NULL,
  `eventTicketMax` int(11) NOT NULL,
  PRIMARY KEY (`eventID`),
  KEY `assoID` (`asso`),
  KEY `eventName` (`eventName`),
  KEY `eventDate` (`eventDate`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`eventID`, `asso`, `eventName`, `eventDate`, `eventFlyer`, `eventTicketMax`) VALUES
(1, 'billetterie', 'ESTU de NOEL', '2015-12-24', 'http://localhost/billetterie/image/affiche.jpg', 900),
(2, 'billetterie', 'Hackathon UTC', '2015-12-02', 'http://localhost/billetterie/image/affiche2.jpg', 70),
(3, 'billetterie', 'Ski UTC', '2016-02-01', 'http://localhost/billetterie/image/affiche3.jpg', 400);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_asso` FOREIGN KEY (`asso`) REFERENCES `assos` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

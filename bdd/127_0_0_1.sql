-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 29 Novembre 2015 à 00:15
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `billetterie_utc`
--
CREATE DATABASE IF NOT EXISTS `billetterie_utc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `billetterie_utc`;

-- --------------------------------------------------------

--
-- Structure de la table `compte_assos`
--

DROP TABLE IF EXISTS `compte_assos`;
CREATE TABLE IF NOT EXISTS `compte_assos` (
  `idAsso` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`idAsso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `compte_assos`
--

INSERT INTO `compte_assos` (`idAsso`, `name`, `email`, `password`) VALUES
(1, 'billetterieUTC', 'billetterie@assos.utc.fr', 'bc05063b0a126b900fa25c8de404391742f87e92');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

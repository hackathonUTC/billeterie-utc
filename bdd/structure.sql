-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 29 Novembre 2015 à 02:02
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données :  `billetterie_utc`
--

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
  `verified` tinyint(1) NOT NULL,
  `verif_key` varchar(40) NOT NULL,
  PRIMARY KEY (`idAsso`),
  UNIQUE KEY `verif_key` (`verif_key`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `idAsso` (`idAsso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `compte_assos`
--

INSERT INTO `compte_assos` (`idAsso`, `name`, `email`, `password`, `verified`, `verif_key`) VALUES
(1, 'billetterie', 'billetterie@assos.utc.fr', 'bc05063b0a126b900fa25c8de404391742f87e92', 1, '');
COMMIT;

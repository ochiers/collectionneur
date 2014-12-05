-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 05 Décembre 2014 à 05:43
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `collectionneur`
--
CREATE DATABASE IF NOT EXISTS `collectionneur` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `collectionneur`;

-- --------------------------------------------------------

--
-- Structure de la table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `IdGroup` int(10) NOT NULL,
  `IdItem` int(10) NOT NULL,
  PRIMARY KEY (`IdGroup`,`IdItem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tuples <group, iditem>';

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `IdItem` int(10) NOT NULL,
  `NomItem` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`IdItem`,`NomItem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tuples <IdItem,NomItem>';

--
-- Contenu de la table `item`
--

INSERT INTO `item` (`IdItem`, `NomItem`, `Description`) VALUES
(1, 'ItemTEst', 'Ceci est la description du premier item'),
(2, 'Second Item', 'Ceci est le second item'),
(3, 'l''item 3', 'la description du troisième item');

-- --------------------------------------------------------

--
-- Structure de la table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `IdPerson` int(10) NOT NULL,
  `IdItem` int(10) NOT NULL,
  PRIMARY KEY (`IdPerson`,`IdItem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tuples de <Person,Item>';

--
-- Contenu de la table `person`
--

INSERT INTO `person` (`IdPerson`, `IdItem`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 3),
(3, 4),
(3, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

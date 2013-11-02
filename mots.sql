-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Sam 02 Novembre 2013 à 00:04
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `mots`
--

-- --------------------------------------------------------

--
-- Structure de la table `adjectif`
--

CREATE TABLE IF NOT EXISTS `adjectif` (
  `feminin_sg` varchar(200) NOT NULL,
  `feminin_pl` varchar(200) NOT NULL,
  `masculin_sg` varchar(200) NOT NULL,
  `masculin_pl` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `adv_lieu`
--

CREATE TABLE IF NOT EXISTS `adv_lieu` (
  `adverbe` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `adv_maniere`
--

CREATE TABLE IF NOT EXISTS `adv_maniere` (
  `adverbe` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `adv_temps`
--

CREATE TABLE IF NOT EXISTS `adv_temps` (
  `adverbe` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `article` varchar(200) NOT NULL,
  `nature` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `conjonction`
--

CREATE TABLE IF NOT EXISTS `conjonction` (
  `conjonction` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `nom`
--

CREATE TABLE IF NOT EXISTS `nom` (
  `nom` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL,
  `nature` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `pluriel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `prep_lieu`
--

CREATE TABLE IF NOT EXISTS `prep_lieu` (
  `preposition` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `prep_maniere`
--

CREATE TABLE IF NOT EXISTS `prep_maniere` (
  `preposition` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pronom`
--

CREATE TABLE IF NOT EXISTS `pronom` (
  `pronom` varchar(200) NOT NULL,
  `nature` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `verbe`
--

CREATE TABLE IF NOT EXISTS `verbe` (
  `infinitif` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL,
  `temps` varchar(200) NOT NULL,
  `1erePers` varchar(200) NOT NULL,
  `2ePers` varchar(200) NOT NULL,
  `3ePers` varchar(200) NOT NULL,
  `4ePers` varchar(200) NOT NULL,
  `5ePers` varchar(200) NOT NULL,
  `6ePers` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 04 mai 2022 à 06:22
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `autocars`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idcategorie` int(11) NOT NULL AUTO_INCREMENT,
  `nomcategorie` char(45) DEFAULT NULL,
  PRIMARY KEY (`idcategorie`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idcategorie`, `nomcategorie`) VALUES
(1, 'Citadine'),
(2, '4x4'),
(3, 'Utilitaire'),
(4, 'Monospace');

-- --------------------------------------------------------

--
-- Structure de la table `chauffeur`
--

DROP TABLE IF EXISTS `chauffeur`;
CREATE TABLE IF NOT EXISTS `chauffeur` (
  `idchauffeur` int(11) NOT NULL AUTO_INCREMENT,
  `nomchauf` char(45) DEFAULT NULL,
  `prenomchauf` char(45) DEFAULT NULL,
  `pseudo` varchar(45) NOT NULL,
  `sexe` char(45) DEFAULT NULL,
  `idcategorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`idchauffeur`),
  KEY `idcategorie` (`idcategorie`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chauffeur`
--

INSERT INTO `chauffeur` (`idchauffeur`, `nomchauf`, `prenomchauf`, `pseudo`, `sexe`, `idcategorie`) VALUES
(1, 'AZOZO', 'Edgard', 'Edgard37', 'M', 1),
(2, 'AHOUANDJO', 'Simeon', 'Sisi09', 'M', 1),
(3, 'AHOUANDJO', 'Gloiry', 'Gloiry80', 'F', 2),
(4, 'NOUDAMESSI', 'Josué', 'Jojo22', 'M', 2),
(5, 'DJOSSOU', 'Murielle', 'Murri229', 'F', 3),
(6, 'DESSE', 'Pierre', 'Pierre56', 'M', 3),
(7, 'DESSE', 'Richbelle', 'Ricky4', 'F', 4),
(8, 'TINI', 'Prisca', 'MissP', 'F', 4),
(9, 'TRIKOU', 'Jonas', 'Jonas4', 'M', 4);

-- --------------------------------------------------------

--
-- Structure de la table `louer`
--

DROP TABLE IF EXISTS `louer`;
CREATE TABLE IF NOT EXISTS `louer` (
  `idlocation` int(11) NOT NULL AUTO_INCREMENT,
  `idutilisateur` int(11) DEFAULT NULL,
  `idvoiture` int(11) DEFAULT NULL,
  `datelocation` datetime DEFAULT NULL,
  `duree` int(11) DEFAULT NULL,
  `filtre` char(20) DEFAULT NULL,
  PRIMARY KEY (`idlocation`),
  KEY `idutilisateur` (`idutilisateur`),
  KEY `idvoiture` (`idvoiture`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `retourvoiture`
--

DROP TABLE IF EXISTS `retourvoiture`;
CREATE TABLE IF NOT EXISTS `retourvoiture` (
  `idretour` int(11) NOT NULL AUTO_INCREMENT,
  `idlocation` int(11) DEFAULT NULL,
  `dateretour` date DEFAULT NULL,
  `etat` int(11) DEFAULT NULL,
  PRIMARY KEY (`idretour`),
  KEY `idlocation` (`idlocation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idutilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nomutilisateur` char(45) DEFAULT NULL,
  `prenomutilisateur` char(45) DEFAULT NULL,
  `tel` int(11) NOT NULL,
  `email` char(45) DEFAULT NULL,
  `password` varchar(10) NOT NULL,
  `statut` char(45) DEFAULT NULL,
  PRIMARY KEY (`idutilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idutilisateur`, `nomutilisateur`, `prenomutilisateur`, `tel`, `email`, `password`, `statut`) VALUES
(1, 'AHOUANDJINOU', 'Obed', 98986598, 'berekiaobed@gmail.com', 'azerty14', 'user'),
(2, 'HOUSSOU', 'Syntyche', 98986598, 'syntychehoussou@gmail.com', 'tata12', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `idvoiture` int(11) NOT NULL AUTO_INCREMENT,
  `marque` char(45) DEFAULT NULL,
  `modele` char(45) DEFAULT NULL,
  `anneefabrication` int(11) NOT NULL,
  `datemiseservice` date DEFAULT NULL,
  `dateassurance` date NOT NULL,
  `tarifhoraire` int(11) DEFAULT NULL,
  `immatriculation` char(45) DEFAULT NULL,
  `idcategorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`idvoiture`),
  KEY `idcategorie` (`idcategorie`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`idvoiture`, `marque`, `modele`, `anneefabrication`, `datemiseservice`, `dateassurance`, `tarifhoraire`, `immatriculation`, `idcategorie`) VALUES
(1, 'KIA', 'Picanto', 2017, '2018-06-01', '2018-06-01', 3000, 'BL3318', 1),
(2, 'TOYOTA', 'Yaris', 2019, '2020-04-24', '2020-04-24', 3200, 'BL0258', 1),
(3, 'MINI', 'Hatch', 2017, '2017-05-06', '2017-05-06', 2800, 'BK2658', 1),
(4, 'BMW', 'X2', 2019, '2019-02-03', '2019-02-03', 3800, 'BZ3265', 2),
(5, 'AUDI', 'Q3', 2019, '2020-07-01', '2020-07-01', 3800, 'BT1256', 2),
(6, 'JEEP', 'Renegade', 2019, '2020-01-01', '2020-01-01', 4000, 'BZ3244', 2),
(7, 'VOLSWAGEN', 'Transporter', 2015, '2016-02-01', '2016-02-01', 2400, 'AZ6598', 3),
(8, 'MERCEDES', 'Sprinter', 2019, '2020-02-03', '2020-02-03', 3000, 'BD2563', 3),
(9, 'NISSAN', 'NV200', 2016, '2017-01-01', '2017-01-01', 2900, 'BK2654', 3),
(10, 'CITROEN', 'Grand C4', 2016, '2017-01-01', '2017-01-01', 2500, 'BH2597', 4),
(11, 'VOLSWAGEN', 'Touran', 2021, '2022-01-01', '2022-01-01', 2900, 'BK4852', 4),
(13, 'RENAULT', 'Espace', 2019, '2020-01-01', '2020-01-01', 4000, 'BK2659', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 17 oct. 2019 à 14:39
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jardiland`
--

-- --------------------------------------------------------

--
-- Structure de la table `graines`
--

DROP TABLE IF EXISTS `graines`;
CREATE TABLE IF NOT EXISTS `graines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `famille` varchar(50) NOT NULL,
  `periode_plantation` datetime NOT NULL,
  `periode_recolte` datetime NOT NULL,
  `conseil` text,
  `quantite` int(11) NOT NULL,
  `visuel` blob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `graines`
--

INSERT INTO `graines` (`id`, `nom`, `famille`, `periode_plantation`, `periode_recolte`, `conseil`, `quantite`, `visuel`) VALUES
(1, 'Haricot', 'Haricotum', '2019-10-01 00:00:00', '2019-11-01 00:00:00', 'Ne pas manger la graine ', 100, NULL),
(2, 'Haricot magique', 'Haricus magicus', '2019-10-15 00:00:00', '2019-11-02 00:00:00', 'Mettre beaucoup de glyphosate ', 150, ''),
(6, 'Super Cawotte', 'Cawottus', '2019-10-12 00:00:00', '2019-10-11 00:00:00', 'Tenir a lâ€™Ã©cart des lapins', 14, ''),
(7, 'Tournesol', 'Comestiblus', '2019-10-20 00:00:00', '2019-10-12 00:00:00', 'Enlever la coquille avant de manger', 15, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `utilisateur` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `telephone`, `email`, `utilisateur`, `password`) VALUES
(1, 'Jordan', 'Fievet', 781032110, 'jordanfievet@outlook.fr', 'Jordan', 'aa36dc6e81e2ac7ad03e12fedcb6a2c0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

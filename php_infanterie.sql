-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 19 août 2018 à 02:47
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `php_infanterie`
--
CREATE DATABASE IF NOT EXISTS `php_infanterie` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `php_infanterie`;

-- --------------------------------------------------------

--
-- Structure de la table `infanterie`
--

DROP TABLE IF EXISTS `infanterie`;
CREATE TABLE `infanterie` (
  `id` int(11) NOT NULL,
  `num_ri` varchar(5) DEFAULT NULL,
  `grade` text,
  `affectation` text,
  `dateInf` varchar(500) DEFAULT NULL,
  `conditionsInf` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `infanterie`
--
ALTER TABLE `infanterie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `infanterie`
--
ALTER TABLE `infanterie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

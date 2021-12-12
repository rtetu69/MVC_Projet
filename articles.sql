-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 12 déc. 2021 à 23:04
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet-ecommerce-web`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `createdAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `nom`, `prix`, `createdAt`) VALUES
(2, 'tetstes', 50, '2021-12-09'),
(3, 'tetstes', 50, '2021-12-09'),
(4, 'test', 50, '2021-12-09'),
(5, 'test', 50, '2021-12-09'),
(6, 'test', 50, '2021-12-09'),
(7, 'test', 50, '2021-12-09'),
(8, 'test6', 50, '2021-12-12'),
(9, 'test6', 50, '2021-12-12'),
(10, 'test6', 50, '2021-12-12'),
(11, 'test6', 50, '2021-12-12'),
(12, 'test6', 50, '2021-12-12'),
(13, 'test6', 50, '2021-12-12'),
(14, 'test6', 50, '2021-12-12'),
(15, 'test6', 50, '2021-12-12'),
(16, 'test3', 52, '2021-12-12'),
(17, 'test3', 52, '2021-12-12'),
(18, 'test3', 52, '2021-12-12'),
(19, 'test6', 54, '2021-12-12');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

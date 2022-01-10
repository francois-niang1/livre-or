-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 10 jan. 2022 à 17:27
-- Version du serveur : 5.5.68-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `francois-niang_livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(1, 'azertyuiop', 1, '2022-01-10 13:27:17'),
(2, 'ça marche \r\n', 1, '2022-01-10 13:30:12'),
(3, 'Super Site ', 3, '2022-01-10 13:46:05'),
(4, 'papapapa', 3, '2022-01-10 13:52:00'),
(5, '\'\'\'\r\n', 3, '2022-01-10 13:53:09'),
(6, 'la musique est mon échappatoire super site', 3, '2022-01-10 13:54:35'),
(7, 'Test', 1, '2022-01-10 14:07:14'),
(8, 'test 2', 1, '2022-01-10 14:20:12'),
(9, 'testt hugo ', 1, '2022-01-10 14:20:21'),
(11, 'Test animations', 1, '2022-01-10 16:26:15'),
(12, 'les animations FONCTIONNENT !!!!!!', 1, '2022-01-10 16:26:44'),
(13, 'Test final ', 1, '2022-01-10 17:00:08');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'Joker', '$2y$10$5NJZKq455hQUdYsKdDjYUukoBLa7HQe4eG/LBkmBAFhMGrcjFvBCe'),
(2, 'papa', '$2y$10$K.2fVBpfPcohJJG4fdtc5uj7ZvNEu/kitg.54vj.o2IpUJBduDlWa'),
(3, 'a', '$2y$10$yMKwz7SSbORELolCCN9.NOUsiN6GRHYO.ILIJ.XB7mhgqe.Dagohy');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

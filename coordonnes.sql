-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 03 oct. 2021 à 00:49
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `coordonnes`
--

-- --------------------------------------------------------

--
-- Structure de la table `donnees`
--

CREATE TABLE `donnees` (
  `id` int(11) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `sexe` char(1) NOT NULL,
  `groupe` int(1) NOT NULL,
  `specialite` varchar(20) NOT NULL,
  `numero_aej` int(11) NOT NULL,
  `tel` int(14) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `pseudo` varchar(40) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `donnees`
--

INSERT INTO `donnees` (`id`, `nom`, `prenom`, `date_de_naissance`, `sexe`, `groupe`, `specialite`, `numero_aej`, `tel`, `mail`, `pseudo`, `pass`) VALUES
(13, 'gfh', 'sakura', '2021-10-06', 'F', 1, 'DATA/IA', 0, 0, 'z\'rz\'@fsdfs', 'z\'tet', 'tuèqetèe');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `donnees`
--
ALTER TABLE `donnees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `donnees`
--
ALTER TABLE `donnees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

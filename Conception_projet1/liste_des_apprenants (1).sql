-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 07 juin 2023 à 19:59
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `liste_des_apprenants`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

CREATE TABLE `apprenant` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date_de_naissance` int(11) NOT NULL,
  `ville_origine` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `formation_de_base` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `apprenant`
--

INSERT INTO `apprenant` (`id`, `nom`, `prenom`, `date_de_naissance`, `ville_origine`, `formation_de_base`, `date`) VALUES
(2, 'ZOROME', 'Faozia', 2001, 'bobo', 'MPCI', '2023-06-05 10:23:55'),
(3, 'KABORE', 'Pascal', 2002, 'bobo', 'philo', '2023-06-05 10:24:56'),
(4, 'ZOUNDI', 'Mari', 2003, 'bobo', 'MPCI', '2023-06-05 10:25:46'),
(5, 'YODA', 'Sali', 2000, 'bobo', 'philo', '2023-06-05 10:26:32'),
(7, 'BAZIE', 'ALI', 2000, 'bobo', 'philo', '2023-06-05 10:31:06'),
(8, 'YONI', 'Souley', 1999, 'bobo', 'MPCI', '2023-06-05 10:33:31'),
(9, 'BAKO', 'Ami', 1991, 'bobo', 'LM', '2023-06-05 10:34:04'),
(10, 'HIEN', 'Moussa', 1800, 'bobo', 'MPCI', '2023-06-05 10:34:37'),
(34, 'ZOUNDI', 'faozia', 2023, 'bobo', 'LM', '0000-00-00 00:00:00'),
(35, 'zorome', 'faozia', 2023, 'bobo', 'CV', '0000-00-00 00:00:00'),
(37, 'ZOROME', 'Faozia', 0, 'bobo', 'MPCI', '0000-00-00 00:00:00'),
(38, 'ZOROME', 'Faozia', 0, 'kdg', 'MPCI', '0000-00-00 00:00:00'),
(39, 'ZOUNDI', 'faozia', 2023, 'ouaga', 'histoire', '0000-00-00 00:00:00'),
(40, 'Zongo', 'aziz', 1993, 'kdg', 'informatique', '0000-00-00 00:00:00'),
(42, 'zorome', 'faozia', 2023, 'bobo', 'LM', '0000-00-00 00:00:00'),
(47, 'zorome', 'fifi', 0, 'bobo', 'LM', '0000-00-00 00:00:00'),
(48, 'zorome', 'fifi', 0, 'bobo', 'histoire', '0000-00-00 00:00:00'),
(49, 'zorome', 'fifi', 2023, 'bobo', 'histoire', '0000-00-00 00:00:00'),
(52, 'Tome', 'fifi', 2023, 'bobo', 'LM', '0000-00-00 00:00:00'),
(53, 'MAIGA', 'Samira', 2023, 'djibo', 'philo', '0000-00-00 00:00:00'),
(54, 'Tome', 'fifi', 2023, 'bobo', 'LM', '0000-00-00 00:00:00'),
(55, 'Zongo', 'aziz', 2023, 'kdg', 'informatique', '0000-00-00 00:00:00'),
(60, 'MAIGA', 'Mira', 2023, 'ouaga', 'Marketing', '0000-00-00 00:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `apprenant`
--
ALTER TABLE `apprenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

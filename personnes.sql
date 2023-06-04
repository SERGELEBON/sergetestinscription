-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 03 juin 2023 à 13:05
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `inscription`
--

-- --------------------------------------------------------

--
-- Structure de la table `personnes`
--

CREATE TABLE `personnes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`id`, `name`, `lastname`, `email`, `phone`, `created_at`) VALUES
(9, 'Bill', 'gate', 'billgate@microsoft.com', '+2254297102310', '2023-06-03 04:14:26'),
(10, 'Will', 'Dosso', 'dossewill@outlook.com', '+13442971023', '2023-06-03 04:14:26'),
(11, 'Atsin', 'Rodrigue', 'atsinroro@yahoo.com', '+23506780238', '2023-06-03 04:14:26'),
(12, 'Nestor', 'Dupuis', 'nestino@gmail.com', '+22247979923', '2023-06-03 04:14:26'),
(13, 'Tubo', 'patrick', 'turbopatrick@moov.com', '+0142971023', '2023-06-03 04:14:26'),
(14, 'Konaté', 'dahoul\"', 'konateabdoul@gmail.com', '+22542971023', '2023-06-03 04:14:26'),
(15, 'Issouf', 'djata', 'issoufjata.com', '+33042971023', '2023-06-03 04:14:26'),
(16, 'Elgar', 'jojo', 'Elgarcoutume@gmail.com', '+2024342971023', '2023-06-03 04:14:26');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

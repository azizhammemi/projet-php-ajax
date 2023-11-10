-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 09 nov. 2023 à 22:55
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
-- Base de données : `e_commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `email`, `password`, `image`) VALUES
(1, 'aziz', 'admin@gmail.com', 'aziz', 'DreamShaper_v7_digital_native_6 (1) (1).jpg');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(20) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `numero` int(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `prix` int(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `nom`, `prenom`, `numero`, `size`, `quantity`, `image`, `prix`, `password`) VALUES
(9, 'hammemi', 'aziz', 2996633, '20', 2, 'product-2.jpg', 300, 'aziz'),
(11, 'hammemi', 'aziz', 2996633, 'abya8', 1, 'you-are-my-boo-mug (1).jpg', 700, 'aziz');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `website`, `message`) VALUES
(5, 'mohamed', 'mohamed@gmail.com', 'mohamed.tn', 'hhhhhhh'),
(6, 'aziz hammemi', 'hammemmiabdelaziz@gmail.com', '', 'hjkkljklkjlkjoopklmkklm');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(20) NOT NULL,
  `libelle` varchar(40) NOT NULL,
  `prix` int(40) NOT NULL,
  `description` varchar(40) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `categorie` varchar(40) NOT NULL,
  `contiter` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `libelle`, `prix`, `description`, `image`, `categorie`, `contiter`) VALUES
(8, 'pppklllll', 250, 's,xl,xxl', 'product-2.jpg', 'puleHomme', 10),
(9, 'pppklllllooooooo', 250, '    32,m', 'product-2.jpg', 'puleHomme', 100),
(10, 'pppklllll', 150, ' s,xxxl', 'product-2.jpg', 'puleHomme', 21),
(12, 'pulle simple', 250, '  s,xxl,xl', 'product-1.jpg', 'puleFemme', 10),
(13, 'pulle simple', 250, ' gjhf', 'product-6.jpg', 'puleFemme', 10),
(14, 'pulle simple', 250, 'gjhf', 'rp-3.jpg', 'puleFemme', 0),
(15, 'pulle simple', 250, 'gjhf', 'rp-3.jpg', 'puleFemme', 0),
(16, 'object', 250, 'gjhf', 'shop-2.jpg', 'objet', 0),
(17, 'object', 250, 'gjhf', 'shop-6.jpg', 'objet', 0),
(18, 'object', 250, 'gjhf', 'shop-6.jpg', 'objet', 0),
(22, '', 500, 'xl', 'DreamShaper_v7_digital_native_5 (2).jpg', 'puleHomme', 10),
(23, '', 500, 'cfgdg', 'DreamShaper_v7_digital_native_1 (1).jpeg', 'puleFemme', 10),
(25, '', 700, 'hjg', 'you-are-my-boo-mug (1).jpg', 'objet', 4);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(40) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `numero` int(20) NOT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `password`, `numero`, `photo`) VALUES
(19, 'hammemi', 'aziz', 'aziz', 2996633, ''),
(20, 'hammemi', 'aziz', 'aziz', 2996677, 'DreamShaper_v7_digital_native_7 (1).jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
